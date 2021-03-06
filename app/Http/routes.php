<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout.principal');
});

Route::get('novidades','IndexController@index');
Route::get('lista','IndexController@lista');
Route::post('nome', 'IndexController@exemploNome');
Route::get('contato','IndexController@getContato');
Route::post('contato','IndexController@postContato');
Route::get('blog','PostsController@index');

