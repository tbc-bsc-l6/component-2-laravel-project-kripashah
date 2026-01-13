<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Module; // Add this for the relation

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Make sure you have role field for admin/teacher/student
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // Student modules
    public function modules()
    {
        return $this->belongsToMany(Module::class)
                    ->withPivot('status','enrolled_at','completed_at')
                    ->withTimestamps();
    }

    // Can student enroll in more modules?
    public function canEnroll()
    {
        return $this->modules()->count() < 4;
    }
}

    
