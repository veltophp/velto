<?php

require 'core.php';

Route::get('/', 'HomeController@index');
Route::get('/example', 'HomeController@example');
