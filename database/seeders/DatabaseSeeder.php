<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
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
        // \App\Models\User::factory(10)->create();
        CompanyProfile::create([
            'about_title' => 'Title',
            'phone' => '017########',
            'email' => 'juelrana@gmail.com',
            'address' => 'dhaka',
        ]);
    }
}
