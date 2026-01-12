<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Module extends Model
{
    protected $fillable = [
        'name',
        'code',
        'available',
    ];

    /**
     * Students enrolled in this module
     */
    public function students()
    {
        return $this->belongsToMany(User::class);
    }
}
