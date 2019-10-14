<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable for users table.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone_call', 'address', 'role_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set the User and Food relation.
     *
     * One to Many Relation (User => Foods)
     */
    public function foods()
    {
        return $this->hasMany('App\Food');
    }

    /**
     * Set the User and Order relation.
     *
     * One to Many Relation (User => Orders)
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
