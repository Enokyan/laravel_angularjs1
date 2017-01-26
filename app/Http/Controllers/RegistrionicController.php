<?php

namespace App\Http\Controllers;

use Request;
use App\Ionicuser;

class RegistrionicController extends Controller
{
    public function registr(){
        $data= Request::all();
        $username = $data['username'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $password = $data['password'];
        $result = Ionicuser::where('username', '=', $username)->orWhere('email',$email)->first();
        if($result){
            return response()->json(['error', 'username or email exists']);
        }
        else{
           $user =  Ionicuser::create([
                'username' => $username,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
            return response()->json(['success' => $user]);
        }
    }
}
