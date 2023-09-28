<?php

use App\Http\Controllers\NotesController;
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

    
Route::get('/',[NotesController::class,'index']);

Route::get('/create', function () {
    return view('home/create');
});

Route::get('/edit', function () {
    return view('home/edit');
});

Route::get('/details/index/{note}', [NotesController::class,"show"]);

Route::post('/post',[NotesController::class,'newnote']);
Route::post('/post/{note}',[NotesController::class,'destroy']);
Route::get('/edit/{note}',[NotesController::class,'edit']);
Route::put('/edit/{note}',[NotesController::class,'update']);