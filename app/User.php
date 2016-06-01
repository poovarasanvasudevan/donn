<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'lastname',
        'middlename',
        'abhyasiid',
        'email',
        'phoneno',
        'address',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','passwordmismatch','passwordresettoken','active',
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = md5($value);
    }

    public function setAbhyasiidAttribute($value)
    {
        $this->attributes['abhyasiid'] = strtolower($value);
    }
}
