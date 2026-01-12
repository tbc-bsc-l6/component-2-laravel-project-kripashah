<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    Schema::create('teachers', function (Blueprint $table) {
    $table->id();
    $table->string('teacher_name');
    $table->string('teacher_email')->unique();
    $table->string('teacher_phone');
    $table->timestamps();
});

    //
}
