<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Thread extends Model
{
    use HasFactory;

    public function categoryy() : BelongsTo
    {
        return $this->belongsTo(Categoryy::class);
    }

    public function prefix() : BelongsTo
    {
        return $this->belongsTo(Prefix::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function thread() : HasMany {
        return $this->hasMany(Thread::class);
    }

    public function reaction() : HasMany
    {
        return $this->hasMany(reaction::class);
    }
}
