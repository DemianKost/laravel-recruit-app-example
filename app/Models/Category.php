<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Category extends Model
{
    use HasFactory, UUID;

    protected $fillable = ['vacancy_id', 'type', 'name'];
}
