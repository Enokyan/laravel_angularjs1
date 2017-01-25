<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ionicuser extends Model
{
    protected $fillable = array('username', 'firstname', 'lastname' , 'email', 'password' );

    protected $hidden = [
        'password', 'remember_token',
    ];
}
