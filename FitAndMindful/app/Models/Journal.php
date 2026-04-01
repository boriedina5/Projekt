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
        'user_id',
        'date',
        'grateful',
        'positive',
        'negative',
        'thoughts',
    ];
    
    public function user(): BelongsTo {
    return $this->belongsTo(User::class);
    }
}
