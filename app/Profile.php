<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Indicates if the food model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable for foods table.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'food_id', 'about'];

    /**
     * Set the Profile and User relation.
     *
     * One to One Relation (Profile => User)
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Set the Profile and Food relation.
     *
     * One to Many Relation (Food => Order)
     */
    public function foods()
    {
        return $this->hasMany('App\Food');
    }
}
