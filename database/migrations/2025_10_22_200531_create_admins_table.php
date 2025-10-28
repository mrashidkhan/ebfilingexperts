<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();

            // Basic Information
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();

            // Role and Status
            $table->enum('role', ['super_admin', 'admin', 'editor', 'moderator'])->default('admin');
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');

            // Avatar
            $table->string('avatar')->nullable();

            // Login tracking
            $table->timestamp('last_login_at')->nullable();

            // Authentication
            $table->rememberToken();

            // Timestamps and soft delete
            $table->timestamps();
            $table->softDeletes();

            // Indexes for better query performance
            $table->index('email');
            $table->index('role');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
