<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Traits\UUID;

class Profile extends Model
{
    use HasFactory, UUID;

    protected $fillable = ['position', 'about'];

    /**
     * User that owns profile
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
