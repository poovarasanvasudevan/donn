<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'location_short_name',
        'location_big_name',
        'location_description',
        'location_type',
    ];
}
