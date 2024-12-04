<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan ini ada

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_user' => 1,
            'name' => 
            'Admin QC',
            'email' => 'adminqc@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'id_user' => 2,
            'name' => 'Admin PIT',
            'email' => 'adminpit@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
