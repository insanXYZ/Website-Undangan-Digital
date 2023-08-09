<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authenticationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('login');
Route::get('/area51', [authenticationController::class, 'index'])->middleware('guest');
Route::post('/area51', [authenticationController::class, 'authenticate'])->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [adminController::class, 'index']);
    Route::get('/dashboard/manage', [adminController::class, 'manage']);
    Route::get('/dashboard/create', [adminController::class, 'create']);
    Route::post('/dashboard/create', [adminController::class, 'store']);
    Route::delete('/dashboard/manage/{slug}', [adminController::class, 'destroy']);
    Route::get('dashboard/manage/{slug}/edit', [adminController::class, 'updateCreate']);
    Route::patch('dashboard/manage/{slug}/edit', [adminController::class, 'updateStore']);
    Route::post('/logout', [authenticationController::class, 'logout']);
});

Route::get('{slug}', [postController::class, 'index']);
Route::post('{slug}', [postController::class, 'store']);
