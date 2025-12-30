<?php

namespace Database\Seeders;

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'user_role_id' => 1, // Admin role
        ]);

        // Teacher user
        User::create([
            'name' => 'Teacher',
            'email' => 'teacher@example.com',
            'password' => Hash::make('teacher123'),
            'user_role_id' => 2, // Teacher role
        ]);

        // Current Student
        User::create([
            'name' => 'Kripa Sah',
            'email' => 'sahkripa73@gmail.com',
            'password' => Hash::make('student123'),
            'user_role_id' => 3, // Current Student role
        ]);

        // Old Student
        User::create([
            'name' => 'Old Student',
            'email' => 'oldstudent@example.com',
            'password' => Hash::make('oldstudent123'),
            'user_role_id' => 4, // Old Student role
        ]);
    }
}
