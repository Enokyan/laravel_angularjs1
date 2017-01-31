<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mychat extends Model
{
    protected $fillable = array('chat_id', 'from_user', 'to_user', 'msg', 'status' );

    public function users(){

        return $this->belongsTo('App\User');
    }
}
