<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Post;

class CreateangularController extends Controller
{
    public function index(){
//        $product = Post::select('*')->get();
//        return view('angular/create',['posts'=>$product]);
        return view('angular/create');
    }
    public function create(){
        $result= Request::all();
        Post::create([
            'user_id'=> Auth::id(),
            'name'=> $result['name'],
            'type'=>  $result['type'],
            'price'=> $result['price'],
        ]);
        return $result;
    }
    public function selectPost(){


    }
}
