<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('Admin@12345'), // You can change this password
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => Hash::make('12345'), // You can change this password
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
