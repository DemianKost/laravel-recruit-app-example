<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Traits\UUID;

class Vacancy extends Model
{
    use HasFactory, UUID;

    protected $guarded = [];

    // protected static function booting(): void
    // {
    //     static::creating(function ($vacancy) {
    //         $vacancy->user_id = auth()->id();
    //     });
    // }

    /**
     * User that created vacancy
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Work type categories of vacancy
     */
    public function workTypes()
    {
        return $this->hasMany(Category::class)->where('type', 'work_type')->latest();
    }

    public function programmingLanguages()
    {
        return $this->hasMany(Category::class)->where('type', 'programming_language')->latest();
    }

    public function devLevels()
    {
        return $this->hasMany(Category::class)->where('type', 'dev_level')->latest();
    }

    public function experiences()
    {
        return $this->hasMany(Category::class)->where('type', 'experience')->latest();
    }

    public function companyTypes()
    {
        return $this->hasMany(Category::class)->where('type', 'company_type')->latest();
    }
}
