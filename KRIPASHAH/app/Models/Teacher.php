<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];
}
class Teacher extends Authenticatable
{
    protected $fillable = ['name', 'email'];

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'assignments');
    }
}
