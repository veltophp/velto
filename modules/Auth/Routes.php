<?php

use Velto\Core\Route\Route;
use Modules\Auth\Controllers\AuthController;
use Modules\Auth\Controllers\SocialController;

use Velto\Core\Middleware\Auth;
use Velto\Core\Middleware\Guest;


Route::group(['middleware' => [Guest::class]], function () {

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'submitLogin'])->name('submit.login');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'submitRegister'])->name('submit.register');

    Route::get('/forgot-password-request', [AuthController::class, 'register'])->name('forgot.password.request');
    Route::post('/forgot-password-process', [AuthController::class, 'register'])->name('forgot.password.process');

    Route::get('/verify-email', [AuthController::class, 'verifyEmail'])->name('verify.email');
    Route::post('/verify-email', [AuthController::class, 'submitVerifyEmail'])->name('submit.verify.email');
    Route::post('/resend-code', [AuthController::class, 'resendCode'])->name('resend.code');

    Route::get('/forgot-password', [AuthController::class, 'forgotPasswordForm'])->name('forgot.password');
    Route::post('/forgot-password', [AuthController::class, 'submitForgotPassword'])->name('submit.forgot.password');

    Route::get('/reset-password/{token}/{email}', [AuthController::class, 'resetPasswordForm'])->name('reset.password');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('submit.reset.password');


    Route::get('/auth/login/{driver}', [SocialController::class, 'socialRedirect'])->name('social.login');
    Route::get('/auth/{driver}/callback', [SocialController::class, 'socialCallback'])->name('social.callback');


});

Route::group(['middleware' => [Auth::class]], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/auth/update/password', [SocialController::class, 'updatePasswordForm'])->name('update.password.form');
    Route::post('/auth/update/password', [SocialController::class, 'updatePasswordProcess'])->name('update.password.process');

});