<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsletterSubscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'verification_token',
        'is_active',
        'source',
        'ip_address',
        'user_agent',
        'subscribed_at',
        'email_verified_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($subscriber) {
            if (empty($subscriber->verification_token)) {
                $subscriber->verification_token = Str::random(64);
            }
            if (empty($subscriber->subscribed_at)) {
                $subscriber->subscribed_at = now();
            }
        });
    }

    /**
     * Scope to get active subscribers
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->whereNull('unsubscribed_at');
    }

    /**
     * Scope to get verified subscribers
     */
    public function scopeVerified($query)
    {
        return $query->whereNotNull('email_verified_at');
    }

    /**
     * Check if subscriber is verified
     */
    public function isVerified()
    {
        return !is_null($this->email_verified_at);
    }

    /**
     * Mark subscriber as verified
     */
    public function markAsVerified()
    {
        $this->update([
            'email_verified_at' => now(),
            'verification_token' => null
        ]);
    }

    /**
     * Unsubscribe the subscriber
     */
    public function unsubscribe()
    {
        $this->update([
            'is_active' => false,
            'unsubscribed_at' => now()
        ]);
    }

    /**
     * Generate unsubscribe URL
     */
    public function getUnsubscribeUrlAttribute()
    {
        return route('newsletter.unsubscribe', [
            'email' => base64_encode($this->email),
            'token' => $this->verification_token
        ]);
    }

    /**
     * Generate verification URL
     */
    public function getVerificationUrlAttribute()
    {
        return route('newsletter.verify', [
            'email' => base64_encode($this->email),
            'token' => $this->verification_token
        ]);
    }
}
