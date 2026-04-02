<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoneWorkout extends Model
{
    /** @use HasFactory<\Database\Factories\DoneWorkoutFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'plan_id',
        'user_id',
        'completed_at'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
