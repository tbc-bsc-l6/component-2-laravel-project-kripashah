<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public const ROLE_ADMIN = 'admin';
    public const ROLE_TEACHER = 'teacher';
    public const ROLE_STUDENT = 'student';
    public const ROLE_OLD_STUDENT = 'old_student';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Modules where the user is enrolled as a student.
     */
    public function enrolledModules()
    {
        return $this->belongsToMany(Module::class)
            ->withPivot(['status', 'pass_status', 'enrolled_at', 'completed_at'])
            ->withTimestamps();
    }

    /**
     * Modules assigned to the user as a teacher.
     */
    public function teachingModules()
    {
        return $this->belongsToMany(Module::class, 'module_teacher', 'teacher_id', 'module_id')
            ->withTimestamps();
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isTeacher(): bool
    {
        return $this->role === self::ROLE_TEACHER;
    }

    public function isStudent(): bool
    {
        return $this->role === self::ROLE_STUDENT;
    }

    public function isOldStudent(): bool
    {
        return $this->role === self::ROLE_OLD_STUDENT;
    }

    public function currentEnrollmentsCount(): int
    {
        return $this->enrolledModules()
            ->wherePivot('status', 'current')
            ->count();
    }

    public function completedEnrollments(): Collection
    {
        return $this->enrolledModules()
            ->wherePivot('status', 'completed')
            ->get();
    }
}
