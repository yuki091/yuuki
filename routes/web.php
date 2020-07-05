<?php


use Illuminate\Support\Facades\Route;

Route::get('/home', 'ClothController@home')->name('home');
Route::get('/create', 'ClothController@create')->name('create');
Route::post('/store', 'ClothController@store')->name('store');
Route::get('/edit/{id}', 'ClothController@edit')->name('edit');
Route::post('/update', 'ClothController@update')->name('update');
Route::get('/delete', 'ClothController@delete')->name('delete');
Route::get('/show/{id}', 'ClothController@show')->name('show');

Route::group(['prefix' => 'user'], function() {

  Route::get('/signup',[
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
  ]);
  Route::post('/signup',[
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
  ]); 
  Route::get('/profile',[
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile'
  ]);
  Route::get('/signin',[
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
  ]);
  Route::post('/signin',[
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
  ]);
 
});
