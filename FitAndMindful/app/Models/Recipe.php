<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    /** @use HasFactory<\Database\Factories\RecipeFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'recipe_kcal',
        'recipe_protein',
        'recipe_fat',
        'recipe_ch',
        'recipe_description',
        'user_id'
    ];
    public function user()
    {
    return $this->belongsTo(User::class);
    }

    /* Need for Many-to-Many connection 
    This tells the framework how to handle the relationship between Recipes and Ingredients via the pivot table.
    */
    
    public function ingredients()
{
    return $this->belongsToMany(Ingredient::class, 'recipe_ingredients')
                ->withPivot('amount');
}

}
