<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserStat extends Model
{
    /** @use HasFactory<\Database\Factories\UserStatFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'weight_id',
        'height_id',
        'shoulder_measures',
        'upperArm_measures',
        'foreArm_measures',
        'chest_measures',
        'abs_measures',
        'waist_measures',
        'hip_measures',
        'butt_measures',
        'thight_measures',
        'calf_measures'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function weight(): BelongsTo
    {
        return $this->belongsTo(Weight::class);
    }

    public function height(): BelongsTo
    {
        return $this->belongsTo(Height::class);
    }
}
