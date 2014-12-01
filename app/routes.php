<?php

Route::get('/', 'IndexController@index');

Route::post('/login', 'UserController@login');
Route::any('/logout', 'UserController@logout');
Route::post('/register', 'UserController@register');

Route::post('/add_post', 'PostController@add');

Route::post('/content/reload', 'ContentController@reload');
