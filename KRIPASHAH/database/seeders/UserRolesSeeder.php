<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_roles')->insert([
            ['role' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Teacher', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Student', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Old Student', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
