<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Routing Halaman Utama CRUD
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('create.book');
Route::post('/book', [BookController::class, 'store'])->name('store.book');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('edit.book');
Route::put('/book/{id}', [BookController::class, 'update'])->name('update.book');
Route::delete('/book/{id}', [BookController::class, 'delete'])->name('delete');
