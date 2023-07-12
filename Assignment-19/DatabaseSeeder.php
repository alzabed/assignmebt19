<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Post 1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Post::create([
            'title' => 'Post 2',
            'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ]);

        Post::create([
            'title' => 'Post 3',
            'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'
        ]);
    }
}

