<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
        public function run(): void
    {
            // Generate first 10 Users
            \App\Models\User::factory(10)->create();
            
            // And then 20 articles
        \App\Models\Article::factory(20)->create();
    }
}
