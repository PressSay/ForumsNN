<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Prefix extends Model
{
    use HasFactory;

    public function categoryys() : BelongsToMany
    {
        return $this->belongsToMany(Categoryy::class, 'categoryy_prefix');
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
