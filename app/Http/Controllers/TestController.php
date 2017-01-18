<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class TestController extends Controller
{
    public function index(){
        $product = User::select('*')->first();
        //Post::create(['user_id'=>2,'name' => 'Flight 10', 'type'=>'qwed','price'=>'500']);
        echo '<pre>';
        DD($product->post->where('user_id',1));

    }
}
