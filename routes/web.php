<?php

use App\Http\Controllers\NoteController;
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
    return view('master');
});
Route::get('/login', function () {
    return view('login');
});

//Route::get('/login',[\App\Http\Controllers\AuthController::class,'showFormLogin'])->name("login");

Route::get('note-crud',[NoteController::class,'index']);
Route::post('add-update-note',[NoteController::class,'store']);
Route::post('edit-note',[NoteController::class,'edit']);
Route::post('delete-note',[NoteController::class,'destroy']);
