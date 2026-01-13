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

    // <<< Add this function BELOW casts() and ABOVE the closing class bracket >>>
    public function modules()
    {
        return $this->belongsToMany(Module::class)
                    ->withPivot('status', 'completed_at')
                    ->withTimestamps();
    }
}
