<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
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
    protected $fillable = ['user_id', 'food_name', 'rating', 'description', 'image'];

    /**
     * Set the Food and User relation.
     *
     * Many to One Relation (Foods => User)
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Set the Food and Order relation.
     *
     * One to One Relation (Food => Order)
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
