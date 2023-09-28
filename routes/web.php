<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

    
Route::get('/', function () {
    return view('home/index');
});

Route::get('/create', function () {
    return view('home/create');
});

Route::get('/edit', function () {
    return view('home/edit');
});

Route::get('/detail', function () {
    return view('details/index');
});
