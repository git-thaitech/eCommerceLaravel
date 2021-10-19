<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/add', function () {
    return view('admin');
});

Route::prefix('/categories')->group(function () {

    Route::get(
        '/create',
        [
            'as' => 'categories.create',
            'uses' => 'CatarogyController@create'
        ]
    );
});
