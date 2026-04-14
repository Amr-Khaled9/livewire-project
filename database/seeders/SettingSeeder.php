<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'name' =>'Barca',
            'address' =>'Barca',
            'email' =>'Barca@Barca.com',
            'phone' =>'0145086220',
            'facebook' =>'Barca.facebook.com',
            'twitter' =>'Barca.twitter.com',
            'linkedin' =>'Barca.linkedin.com',
            'instagram' =>'Barca.instagram.com'
        ]);
    }
}
