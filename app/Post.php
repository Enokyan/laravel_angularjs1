<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model {
    protected $fillable = array('user_id', 'name', 'type', 'price');

    public function users(){

        return $this->belongsTo('App\User');
    }
}
