<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API routes
Route::get('/books', [BookController::class, 'index']); // List semua buku

// Protected API routes (requires authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/books', [BookController::class, 'store']); // Tambah buku
    Route::put('/books/{id}', [BookController::class, 'update']); // Update buku
    Route::delete('/books/{id}', [BookController::class, 'destroy']); // Hapus buku
});
