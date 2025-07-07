<?php

use Velto\Core\Route\Route;
use Velto\Core\Middleware\Auth;
use Modules\Axion\AxionController;
use Modules\Axion\CrudController;


Route::group(['middleware' => [Auth::class]], function () {

    Route::get('/axion', [AxionController::class, 'axionDashboard'])->name('axion.dashboard');
    Route::get('/axion/example-page', [AxionController::class, 'examplePage'])->name('axion.example.page');
    Route::get('/axion/profile', [AxionController::class, 'axionProfile'])->name('axion.profile');

    Route::post('/delete-account', [AxionController::class, 'deleteAccount'])->name('delete.account');
    Route::post('/change-password', [AxionController::class, 'changePassword'])->name('axion.change.password');
    Route::post('/update-name', [AxionController::class, 'updateName'])->name('axion.update.name');

    Route::get('/axion/crud', [CrudController::class, 'crud'])->name('axion.crud');
    Route::get('/axion/crud/search', [CrudController::class, 'crudSearch'])->name('axion.crud.search');
    Route::post('/axion/crud', [CrudController::class, 'crudStore'])->name('axion.crud.store');
    Route::get('/axion/crud/{id}/view', [CrudController::class, 'crudView'])->name('axion.crud.view');
    Route::get('/axion/crud/{id}/edit', [CrudController::class, 'crudEdit'])->name('axion.crud.edit');
    Route::post('/axion/crud/{id}/update', [CrudController::class, 'crudUpdate'])->name('axion.crud.update');
    Route::post('/axion/crud/{id}/delete', [CrudController::class, 'crudDelete'])->name('axion.crud.delete');

});
