<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin')->group(function () {

    Route::get(
        '/',
        [HomeController::class, 'adminHome']
    )->name('home');

    Route::get(
        '/login',
        [HomeController::class, 'adminLogin']
    )->name('create');

    Route::get(
        '/register',
        [HomeController::class, 'adminRegister']
    )->name('register');
});




Route::prefix('categories')->name('categories')->group(function () {

    Route::get(
        '/create',
        [CategoryController::class, 'create']
    )->name('create');

    Route::get(
        '/',
        [CategoryController::class, 'index']
    )->name('index');
});


Route::get('/home', function () {
    return view('home');
});

