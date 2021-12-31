<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'auth'], function(){
    Route::post('login', 'Auth\AuthController@login');
    Route::post('signup', 'Auth\AuthController@signup');
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user', 'Auth\AuthController@user');
    Route::get('logout', 'Auth\AuthController@logout');
});

