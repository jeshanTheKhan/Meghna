<?php

namespace Database\Seeders;
use Hash;

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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Md.Moshin Khan',
            'user_role' => 'Admin',
            'email' => 'moshinkhan1303@gmail.com',
            'password' => Hash::make('moshinkhan13031976'),
        ]);
        User::factory()->create([
            'name' => 'Al Amin',
            'user_role' => 'Moderator',
            'email' => 'meghna@gmail.com',
            'password' => Hash::make('meghnacngworkshop@11'),
        ]);
    }
}
