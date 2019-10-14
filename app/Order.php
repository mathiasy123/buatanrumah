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
    protected $fillable = ['user_id', 'food_id', 'order_code', 'customer_name', 'customer_phone', 'quantity', 'total_price'];

    /**
     * Set the Order and User relation.
     *
     * Many to One Relation (Orders => User)
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
