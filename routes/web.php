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