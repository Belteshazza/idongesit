<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'wdev' => 'something',
            'wdesign' => 'something',
            'frespon' => 'something',
            'ecom' => 'something',
            'pweb' => 'something',
            'customs' => 'something',
            'about1' => 'something',
            'about2' => 'something',
            'about3' => 'something',
        
        ]);
    }
}
