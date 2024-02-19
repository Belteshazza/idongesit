<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'caption' => 'something',
            'title' => 'something',
            'url' => 'something',
            'image' => 'something',           
        
        ]);
    }
}
