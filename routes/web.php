<?php

use Velto\Core\Route;

Route::get('/', 'HomeController@index');
Route::get('/example', 'HomeController@example');
