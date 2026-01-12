<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    public function run(): void
    {
        // List of default modules
        $modules = [
            ['module' => 'Mathematics'],
            ['module' => 'Physics'],
            ['module' => 'Chemistry'],
            ['module' => 'Biology'],
            ['module' => 'Computer Science'],
        ];

        foreach ($modules as $mod) {
            DB::table('modules')->updateOrInsert(
                ['module' => $mod['module']], // ensures no duplicates
                ['module' => $mod['module']]
            );
        }
    }
}