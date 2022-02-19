<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'home']);
Route::get('/tabel',[BookController::class, 'index']);
Route::get('/cari/{id}', [BookController::class, 'cari']);
Route::post('/tambah', [BookController::class, 'tambah']);
Route::get('/hapus/{id}', [BookController::class, 'hapus']);
Route::get('/show/{id}', [BookController::class, 'show']);
Route::post('/edit',[BookController::class,'edit']);
