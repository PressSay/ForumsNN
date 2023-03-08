<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    public function user() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function permission() : BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}