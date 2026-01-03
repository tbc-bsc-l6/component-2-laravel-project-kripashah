<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Teacher One',
            'email' => 'teacher1@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2, // teacher
        ]);

        User::create([
            'name' => 'Student One',
            'email' => 'student1@example.com',
            'password' => Hash::make('password'),
            'role_id' => 3, // student
        ]);

        User::create([
            'name' => 'Old Student',
            'email' => 'oldstudent@example.com',
            'password' => Hash::make('password'),
            'role_id' => 4, // old student
        ]);
    }
}
