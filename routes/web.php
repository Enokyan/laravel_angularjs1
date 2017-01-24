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
Route::get('api/select', 'PostController@selectPost');

//selectPost
Route::post('api/selectPost', 'PostController@selectMyPost');
//delete angular
Route::post('api/delete', 'PostController@DeletePost');
//updatePost
Route::post('api/UpdatePost', 'PostController@UpdatePost');

//carusel (slider)

Route::get('myCarousel', 'PostController@myCarousel');