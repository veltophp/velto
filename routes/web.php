<?php

use Velto\Core\Route;

Route::get('/', 'HomeController@index');

Route::get('/example', 'PagesController@example');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@contact_send');