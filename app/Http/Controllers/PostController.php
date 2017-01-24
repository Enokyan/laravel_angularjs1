<?php

namespace App\Http\Controllers;

use App\Cart;
use Request;
use Auth;
use App\Post;
use Session;

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
        $result= Request::all();
        Post::where('id', '=', $result['id'])->delete();
        return 1;
    }
    public function UpdatePost(){
    $result= Request::all();
        Post::where('id', '=', $result['id'])->update(['name' => $result['name'],'type'=>  $result['type'],'price'=> $result['price']]);
        return $result;
    }
    public function getAddToCart($id){
        $posts = Post::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($posts, $posts->id);

        Request::session()->put('cart', $cart);
        return redirect()->route('post.index');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shopping/shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping/shopping-cart', ['posts'=> $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}