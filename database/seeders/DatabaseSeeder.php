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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Md.Moshin Khan',
            'user_name' => '@moshin13',
            'user_role' => 'admin',
            'email' => 'moshinkhan1303@gmail.com',
            'password' => Hash::make('moshinkhan13031976'),
        ]);
        User::factory()->create([
            'name' => 'Al Amin',
            'user_name' => '@alamin',
            'user_role' => 'moderator',
            'email' => 'meghna.retesting.cng@gmail.com',
            'password' => Hash::make('meghnaretestingcng@21'),
        ]);
    }
}
