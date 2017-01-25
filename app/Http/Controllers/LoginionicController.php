<?php

namespace App\Http\Controllers;

use Request;
use App\Ionicuser;


class LoginionicController extends Controller
{
    public function login(){
        $data= Request::all();
        $username = $data['username'];
        $password = $data['password'];
        $result = Ionicuser::where('username', '=', $username)
            ->where('password',$password)
            ->first();
        if($result){
            return response()->json(['success' => $result]);

        }
        else{
            return response()->json(['error', 'mutqagrvac e sxal mutqanun kam gaxtnabar']);
        }
    }
}
