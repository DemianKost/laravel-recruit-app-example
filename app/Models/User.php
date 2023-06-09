<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Vacancy;
use App\Models\Profile;
use App\Models\Resume;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function booting(): void
    {
        static::created(function ($user) {
            Profile::create([
                'user_id' => $user->id
            ]);

            Resume::create([
                'user_id' => $user->id,
                'position' => 'None',
                'description' => 'None'
            ]);
        });
    }

    /**
     * Vacancies created by user
     */
    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    /**
     * Profile data of user
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Resime of user
     */
    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
