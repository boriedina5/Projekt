<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function foodDiaries()
    {
        //Search all food diary in the food_diaries table, where the user_id is mine
        return $this->hasMany(FoodDiary::class);//one user has many diary
    }
    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function userStat()
    {
        return $this->hasOne(UserStat::class);
    }
    public function doneWorkouts()
    {
        return $this->hasMany(DoneWorkout::class);
    }
    public function heights()
    {
        return $this->hasMany(Height::class);
    }

    public function weights()
    {
        return $this->hasMany(Weight::class);
    }
}
