<?php

namespace App\Http\Controllers;

use Request;
use App\User;

class RegistrionicController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function registr(){
        $data= Request::all();
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $result = User::where('name', '=', $username)->orWhere('email',$email)->first();
        if($result){
            return response()->json(['error', 'username or email exists']);
        }
        else{
           $user =  User::create([
                'name' => $username,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
            return response()->json(['success' => $user]);
        }
    }
}
