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
    return view('site.inicio');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('site.nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('site.contacto');
})->name('contacto');

Route::get('/colegios', function () {
    return view('site.colegios');
})->name('colegios');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
