<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->foreignId('parent_id')->constrained('post_comments')->onDelete('cascade')->nullable();

            $table->string('name');
            $table->string('email');
            $table->string('website')->nullable();

            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();

            $table->text('content');
            $table->enum('status', ['pending', 'approved', 'rejected', 'spam'])->default('pending');

            $table->boolean('is_featured')->default(false);
            $table->bigInteger('likes_count')->default(0);
            $table->bigInteger('dislikes_count')->default(0);

            $table->timestamps();

            $table->index('post_id');
            $table->index('parent_id');
            $table->index('status');
            $table->index('email');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
