<?php

namespace App\Http\Controllers;

use App\Cart;
use GuzzleHttp\Tests\Psr7\Str;
use Mockery\CountValidator\Exception;
use Request;
use Auth;
use App\Post;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

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

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shopping.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shopping/checkout', ['total'=>$total, 'totalPrice' => $cart->totalPrice]);
    }

    public function postCheckout(){
        if(!Session::has('cart')){
            return redirect()->route('post.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_2IF9t8dEkrc74bTiI9yGLv1O');
        try{
            Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => Request::input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
            ));
        } catch (\Exception $e){
            return redirect()->route('chechout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('post.index')->with('success', 'Successfully purchased posts!');
    }
}