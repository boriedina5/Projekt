<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'plan_id',
        'exercise_name',
        'quantity',
        'quantity_type',
        'img'
    ];

    // Append a computed attribute for formatted quantity
    protected $appends = ['formatted_quantity'];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    // Return quantity formatted with unit or "each" if needed
    public function getFormattedQuantityAttribute()
    {
        if (!$this->quantity) return '';

        $typeParts = explode(',', $this->quantity_type);
        $baseType = $typeParts[0] ?? '';
        $isEach = in_array('each', $typeParts);

        $label = $baseType === 'sec' ? ' sec' : '';
        $value = $this->quantity . $label;

        return $isEach ? "$value - $value" : $value;
    }
}