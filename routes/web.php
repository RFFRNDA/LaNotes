<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/', [NotesController::class, 'index'])->middleware('auth');
Route::get('/details/index/{note}', [NotesController::class, "show"])->middleware('auth');
Route::get('/create', [NotesController::class, 'create'])->middleware('auth');


Route::post('/notes', [NotesController::class, 'newnote']);
Route::delete('/notes/{note}', [NotesController::class, 'destroy']);
Route::get('/notes/{note}', [NotesController::class, 'edit']);
Route::put('/notes/{note}', [NotesController::class, 'update']);
