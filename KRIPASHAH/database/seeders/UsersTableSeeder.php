<?php

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
    'name' => 'Kripa',
    'email' => 'sahkripa73@gmail.com',
    'password' => Hash::make('password123'),
    'user_role_id' => 1, // must provide a valid role ID from user_roles
]);

        
    }
}
