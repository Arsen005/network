<?php

Route::get('/', 'IndexController@index');

Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');