<?php

use Velto\Core\Route\Route;
use Modules\Home\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');