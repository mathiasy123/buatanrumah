<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorContent extends Model
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
    protected $fillable = ['hero_image', 'title_hero', 'text_hero', 'title_about', 'text_about', 'video'];
}
