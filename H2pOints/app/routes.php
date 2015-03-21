<?php

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('login', [
    'as' => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('login', [
    'as' => 'login_path',
    'uses' => 'SessionsController@store'
]);
