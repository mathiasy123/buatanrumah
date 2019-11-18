<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReSeller extends Model
{
    /**
     * Indicates if the order model should be timestamped.
     *
     * @var bool
    */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable for orders table.
     *
     * @var array
    */
    protected $fillable = ['name', 'email', 'phone_call', 'address', 'reseller_image', 'password'];
}
