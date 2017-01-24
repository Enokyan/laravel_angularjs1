<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Post;
use Image;

class CreateangularController extends Controller
{
    public function index(){
//        $product = Post::select('*')->get();
//        return view('angular/create',['posts'=>$product]);
        return view('angular/create');
    }
    public function create(){
        $result= Request::all();
        return $result['file'];
//        if ($result->hasFile('file')) {
//            $file = $result->file('file');
//            $filename = time() . '.' . $file->getClientOriginalExtension();
//            Image::make($file)->resize(200, 200)->save(public_path('img/') . $filename);
//            $img_name = $filename;
//        } else
//            $img_name = 0;
//        Post::create([
//            'user_id'=> Auth::id(),
//            'name'=> $result['name'],
//            'type'=>  $result['type'],
//            'price'=> $result['price'],
//            'image'=> $img_name,
//        ]);
//        return $result;
    }
}
