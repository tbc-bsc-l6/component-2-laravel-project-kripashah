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
       Schema::create('modules', function (Blueprint $table) {
    $table->id();
    $table->string('module_name');// keep your original name
    $table->string('module_code')->unique();// keep your original code
    $table->boolean('available')->default(true); // NEW column for availability
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
