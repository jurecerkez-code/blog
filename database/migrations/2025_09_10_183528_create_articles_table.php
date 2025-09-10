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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function up(): void
{
    Schema::create('articles', function (Illuminate\Database\Schema\Blueprint $table) {
        $table->id();
        
        $table->string('title');
        $table->text('content');
        $table->boolean('published')->default(false);
        $table->foreignId('author_id');
        
        $table->timestamps();
    });
}

};
