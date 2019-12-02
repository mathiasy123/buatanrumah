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
    protected $fillable = ['user_id', 'food_id', 'hero_image', 'title_hero', 'cathering_name', 'title_about', 'text_about', 'about_image'];

    /**
     * Set the Profile and User relation.
     *
     * One to One Relation (Profile => User)
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Set the Profile and Food relation.
     *
     * Many to One Relation (Food => Profile)
     */
    public function foods()
    {
        return $this->hasMany('App\Food');
    }
}
