<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
