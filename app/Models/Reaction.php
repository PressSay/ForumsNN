<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reaction extends Model
{
    use HasFactory;

    public function emoji() : BelongsTo
    {
        return $this->belongsTo(Emoji::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function thread_comment() : BelongsTo
    {
        return $this->belongsTo(Thread_Comment::class);
    }
}
