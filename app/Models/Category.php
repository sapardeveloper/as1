<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function posts(): HasMany
    {
        return $this->hasMany(post::class);
    }
}
