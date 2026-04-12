<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(['email' => 'admin@gmail.com'], [
            'name' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'email_verified_at' => now()
        ]);
    }
}
