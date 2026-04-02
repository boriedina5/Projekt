<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    /** @use HasFactory<\Database\Factories\PlanFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'version',
        'sets',
        'duration'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}
