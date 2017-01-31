<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/test', 'TestController@index');

//angular
Route::get('/createAng', 'CreateangularController@index');
/////ajax angular ////////
Route::post('api/create', 'CreateangularController@create');

///////api select
//Route::get('api/select', 'PostController@selectPost');
Route::get('api/select',
    ['uses' => 'PostController@selectPost',
     'as'=>'post.index'
    ]);


//getchekout
Route::get('api/checkout',
    ['uses' => 'PostController@getCheckout',
        'as'=>'checkout'
    ]);

//postchekout
Route::post('api/checkout',
    ['uses' => 'PostController@postCheckout',
        'as'=>'checkout'
    ]);

//selectPost
//Route::post('api/selectPost', 'PostController@selectMyPost');
Route::post('api/selectPost', ['uses' => 'PostController@selectMyPost']);
//stripe
Route::get('shooping-cart',[
    'uses' => 'PostController@getCart',
    'as'=>'post.shoppingCart'
]);
//delete angular
Route::post('api/delete', 'PostController@DeletePost');
//updatePost
Route::post('api/UpdatePost', 'PostController@UpdatePost');

Route::get('api/add-to-cart/{id}', ['uses' => 'PostController@getAddToCart', 'as'=>'post.addToCart']);
//carusel (slider)

Route::get('myCarousel', 'PostController@myCarousel');



//ionic Arturin tam api

//myauth
Route::get('api/myauth', 'MyauthController@index');

Route::post('/api/myauth/registr', [
    'uses' => 'RegistrionicController@registr',
    'as'=>'registr'
]);


Route::get('api/registr', function() {
    return View('myauth/registr');
});

Route::get('api/login', function() {
    return View('myauth/login');
});

Route::post('/api/myauth/login',[
    'uses' => 'LoginionicController@login',
    'as'=>'login'
]);



Route::get('api/myuser', 'MyauthController@user');




Route::get('api/home', function() {
    return View('myauth/home');
});
//api/carousel'

Route::get('api/carousel', function() {
    return View('angular/Carousel');
});



Route::get('api/mychat', 'ChatController@getChat');


//Route::get('api/home', function() {
//    return View('myauth/home');
//});

//send msg
Route::post('api/sendMessage', ['uses' => 'ChatController@sendMessage']);



//Select Message
Route::post('api/SelectMessage', ['uses' => 'ChatController@SelectMessages']);

//interval new message
Route::post('api/SelectNewMessage', ['uses' => 'ChatController@SelectNewMessage']);

//angular users
Route::post('api/getuser', ['uses' => 'MyauthController@getuser']);