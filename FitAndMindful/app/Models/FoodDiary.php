<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodDiary extends Model
{
    /** @use HasFactory<\Database\Factories\FoodDiaryFactory> */
    use HasFactory, SoftDeletes;

    //which fields can be filled
    protected $fillable = [
        'name',
        'user_id', 
        'calories', 
        'proteins', 
        'fats', 
        'carbohydrates', 
        'date', 
        'breakfasts', 
        'snacks', 
        'lunches', 
        'dinners'
    ];

    public function user(): BelongsTo {
    //"reverse method" - a specific entry belongs to someone (belongs to).
    return $this->belongsTo(User::class);
    }
}
