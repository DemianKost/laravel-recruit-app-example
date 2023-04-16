<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Vacancy extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booting(): void
    {
        static::creating(function ($vacancy) {
            $vacancy->user_id = auth()->id();
        });
    }

    /**
     * User that created vacancy
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
