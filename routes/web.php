<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('profiles', 'ProfilesController')->only([
        'index'
    ]);
    Route::resource('users', 'UsersController')->only([
        'index', 'destroy'
    ]);
});
