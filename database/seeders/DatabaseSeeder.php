<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@school.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Create test student
        User::create([
            'name' => 'Test Student',
            'email' => 'student@school.com',
            'password' => bcrypt('student123'),
            'role' => 'student',
        ]);
    }
}
