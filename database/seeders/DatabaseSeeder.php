<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        // Post::factory(5)->create();

        $user = User::factory()->create();

        Post::factory(30)->create([
            'user_id' => $user->id,
            'thumbnail' => 'thumbnails/g86f00p6idqh3BAD73Iky2qBCBFuUic9e1TkxEf7.png'
        ]);
    }
}
