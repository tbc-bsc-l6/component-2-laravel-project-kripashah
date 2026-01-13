<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Module extends Model
{
    protected $fillable = ['name', 'code', 'available'];

    public function students()
    {
        return $this->belongsToMany(User::class)
                    ->withPivot('status', 'completed_at')
                    ->withTimestamps();
    }

    public function teachers()
    {
        return $this->belongsToMany(\App\Models\Teacher::class, 'assignments');
    }
}
