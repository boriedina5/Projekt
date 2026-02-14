<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Journal extends Model
{
    /** @use HasFactory<\Database\Factories\JournalFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date', 
        'gratitudes', 
        'positive_things', 
        'negative_things', 
        'moods', 
        'thoughts', 
        'user_id'];
    
    public function user(): BelongsTo {
    return $this->belongsTo(User::class);
    }
}
