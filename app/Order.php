<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
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
    protected $fillable = ['user_id', 'food_id', 'order_code', 'customer_name', 'customer_phone', 'customer_address', 'quantity', 'total_price', 'finished'];

    /**
     * Set the Order and User relation.
     *
     * Many to One Relation (Orders => User)
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Set the Order and Food relation.
     *
     * One to One Relation (Order => Food)
     */
    public function food()
    {
        return $this->hasOne('App\Food', 'id');
    }
}
