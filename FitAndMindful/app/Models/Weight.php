<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weight extends Model
{
    /** @use HasFactory<\Database\Factories\WeightFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'weight',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userStat(): HasOne
    {
        return $this->hasOne(UserStat::class);
    }
}
