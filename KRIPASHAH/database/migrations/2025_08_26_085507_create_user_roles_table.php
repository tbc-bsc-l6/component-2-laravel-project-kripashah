<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('user_roles')->insert([
    ['id' => 1, 'role' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
    ['id' => 2, 'role' => 'Teacher', 'created_at' => now(), 'updated_at' => now()],
    ['id' => 3, 'role' => 'Student', 'created_at' => now(), 'updated_at' => now()],
]);

    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
