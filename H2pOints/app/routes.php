<?php

/* Home routes */

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

/* Session routes */

Route::get('login', [
    'as' => 'login_path',
    'uses' => 'SessionsController@create'
]);

Route::post('login', [
    'as' => 'login_path',
    'uses' => 'SessionsController@store'
]);

/* Event routes */

Route::get('events', [
    'as' => 'events_path',
    'uses' => 'EventsController@index'
]);

Route::get('event/{id}', [
    'as' => 'event_path',
    'uses' => 'EventsController@show'
]);

/* Ticket routes */

Route::get('tickets/{id}', [
    'as' => 'tickets_path',
    'uses' => 'TicketsController@index'
]);

Route::get('ticket/{id}', [
    'as' => 'ticket_path',
    'uses' => 'TicketsController@show'
]);

/* Profile routes */

Route::get('profile', [
    'as' => 'profile_path',
    'uses' => 'ProfileController@show'
]);

/* Product routes */

Route::get('products', [
    'as' => 'products_path',
    'uses' => 'ProductsController@index'
]);

Route::get('product/{id}', [
    'as' => 'product_path',
    'uses' => 'ProductsController@show'
]);

/* Achievements routes */

Route::get('achievements', [
    'as' => 'achievements_path',
    'uses' => 'AchievementsController@index'
]);


