<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function posts(): BelongsTo
    {
        return $this->belongsTo(post::class);
    }
}
