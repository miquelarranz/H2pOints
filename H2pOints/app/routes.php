<?php

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/', [
    'as' => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('/', [
    'as' => 'login_path',
    'uses' => 'SessionsController@store'
]);
