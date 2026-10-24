<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::view('/', 'services.index', [
    'page' => 'home',
    'pageTitle' => 'Home'
])->name('home');


Route::view('/about', 'services.index', [
    'page' => 'about',
    'pageTitle' => 'Tentang Kami'
])->name('about');


Route::view('/contact', 'services.index', [
    'page' => 'contact',
    'pageTitle' => 'Kontak'
])->name('contact');



/*
|--------------------------------------------------------------------------
| USER SERVICES
|--------------------------------------------------------------------------
*/

Route::get('/services', [ServiceController::class, 'index'])
    ->name('services.index');


Route::get('/services/{service}', [ServiceController::class, 'show'])
    ->name('services.show');



/*
|--------------------------------------------------------------------------
| ADMIN SERVICES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/services', [ServiceController::class, 'adminIndex'])
        ->name('services.index');


    Route::get('/services/create', [ServiceController::class, 'create'])
        ->name('services.create');


    Route::post('/services', [ServiceController::class, 'store'])
        ->name('services.store');


    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])
        ->name('services.edit');


    Route::put('/services/{service}', [ServiceController::class, 'update'])
        ->name('services.update');


    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])
        ->name('services.destroy');

});