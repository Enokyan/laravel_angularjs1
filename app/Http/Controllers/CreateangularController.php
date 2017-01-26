<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Post;
use Image;

class CreateangularController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('angular/create');
    }
    public function create(){
        $result= Request::all();
        $img_name = '';
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            $filePath = $file['tmp_name'];
            $filename = $file['name'];
            Image::make($filePath)->resize(200, 200)->save(public_path('img/') . $filename);
            $img_name = $filename;
        } else
            $img_name = 0;
        Post::create([
            'user_id'=> Auth::id(),
            'name'=> $result['name'],
            'type'=>  $result['type'],
            'price'=> $result['price'],
            'image'=> $img_name,
        ]);
        return $result;
    }
}
