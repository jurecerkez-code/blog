<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'name',
        'phone',   // replace email with phone
        'password',
    ];

    /**
     * Hidden attributes.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts
     */
    protected $casts = [
        'phone_verified_at' => 'datetime', // replace email_verified_at
        'password' => 'hashed',
    ];

    /**
     * User has many articles.
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }
}
