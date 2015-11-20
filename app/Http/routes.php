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

Route::post('snippets/favourite', array('uses' =>'FavouriteController@postFavourite'));
Route::get('/snippets', array('as' => 'snippets.view', 'uses' =>'SnippetController@getView'));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    'snippets' => 'SnippetController',
]);

Route::get('/', array('as' => 'home', 'uses' =>'HomeController@index'));
Route::get('/dashboard', array('as' => 'dashboard', 'uses' =>'SnippetController@getView'));
