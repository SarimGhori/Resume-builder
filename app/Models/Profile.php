<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'title',
        'phone',
        'address',
        'summary',
        'website',
        'github',
        'linkedin',
        'profile_photo',
    ];

    /**
     * Profile belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}