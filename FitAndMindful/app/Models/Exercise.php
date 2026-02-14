<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    /** @use HasFactory<\Database\Factories\ExerciseFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'exercise_name',
    'beginner_repeat',
    'intermediate_repeat',
    'advanced_repeat',
    'quantity_type',
    'level',
    'plan_id'
];

    public function plan(): BelongsTo {
        return $this->belongsTo(Plan::class);
    }
    
}
