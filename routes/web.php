<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/test', 'TestController@index');

//angular
Route::get('/createAng', 'CreateangularController@index');
