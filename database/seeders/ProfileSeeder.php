<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_id' => 1,
            'caption' => 'something',
            'title' => 'something',
            'image' => 'something',  
            'image2' => 'something',  
        
        ]);
    }
}
