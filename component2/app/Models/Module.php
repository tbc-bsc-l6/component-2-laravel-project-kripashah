<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'description',
        'available',
        'max_students',
    ];

    protected $casts = [
        'available' => 'boolean',
    ];

    /**
     * Students enrolled in the module.
     */
    public function students()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['status', 'pass_status', 'enrolled_at', 'completed_at'])
            ->withTimestamps();
    }

    /**
     * Teachers assigned to this module.
     */
    public function teachers()
    {
        return $this->belongsToMany(User::class, 'module_teacher', 'module_id', 'teacher_id')
            ->withTimestamps();
    }

    public function currentStudentCount(): int
    {
        return $this->students()
            ->wherePivot('status', 'current')
            ->count();
    }

    public function hasCapacity(): bool
    {
        return $this->currentStudentCount() < ($this->max_students ?? 10);
    }
}

