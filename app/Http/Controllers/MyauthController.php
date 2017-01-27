<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MyauthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('myauth.index');
    }

    public function user(){
        return view('myauth.user');
    }

    public function getuser(){
        $users = User::select('*')->get();
        return $users;
    }
}
