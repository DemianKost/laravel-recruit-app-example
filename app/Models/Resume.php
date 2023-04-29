<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;
use App\Models\User;

class Resume extends Model
{
    use HasFactory, UUID;

    protected $fillable = ['user_id', 'position', 'description', 'status'];

    /**
     * Resume that belongs to user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
