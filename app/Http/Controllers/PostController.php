<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Post;

class PostController extends Controller
{
    public function selectPost(){
        return view('angular/posts');
    }
    public function selectMyPost(){
        $posts = Post::select('*')->get();
        return $posts;
    }

    public function DeletePost(){
//        $result='true';
        $result= Request::all();
        Post::where('id', '=', $result['id'])->delete();
        return 1;
    }
    public function UpdatePost(){
    $result= Request::all();
        Post::where('id', '=', $result['id'])->update(['name' => $result['name'],'type'=>  $result['type'],'price'=> $result['price']]);

        return $result;

}
}