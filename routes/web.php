<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boock',[BookController::class,'index']);
Route::get('/category/{id}',[BookController::class,'category']);

Route::delete('/boock/{id}',[BookController::class,'delete'])->name('books.delete');
Route::get('/boock/create', [BookController::class,'create'])->name('books.create');
Route::post('/boock/create', [BookController::class,'store'])->name('books.store');
Route::get('/boock/{id}/edit', [BookController::class,'edit'])->name('books.edit');
Route::put('/boock/{id}', [BookController::class,'update'])->name('books.update');
