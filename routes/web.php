<?php


use Illuminate\Support\Facades\Route;

// Route::get('/home', 'ClothController@home')->name('home');
// Route::get('/create', 'ClothController@create')->name('create');
// Route::post('/store', 'ClothController@store')->name('store');
// Route::get('home/{id}/edit', 'ClothController@edit')->name('home.edit');
// Route::post('/home/{id}', 'ClothController@update')->name('home.update');
// Route::get('/delete/{id}', 'ClothController@delete')->name('delete');
// Route::get('/show/{id}', 'ClothController@show')->name('show');
Route::resource('/home', 'ClothController');

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
