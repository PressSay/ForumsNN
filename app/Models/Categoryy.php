<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoryy extends Model
{
    use HasFactory;

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function prefixs() : BelongsToMany
    {
        return $this->belongsToMany(Prefix::class, 'categoryy_prefix');
    }

    public function categoryy() : HasMany
    {
        return $this->hasMany(Categoryy::class, 'child_id');
    }

}
