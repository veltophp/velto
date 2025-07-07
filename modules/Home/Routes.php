<?php

use Velto\Core\Route\Route;
use Modules\Home\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');