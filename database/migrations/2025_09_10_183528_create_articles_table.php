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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // string column for title
            $table->text('content');        // text column for content
            $table->boolean('published')->default(false);   // default false
            $table->foreignId('author_id')  // foreign key to users table
                  ->constrained('users')   // references id on users
                  ->onDelete('cascade');   // delete articles if user is deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
