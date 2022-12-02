<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index'])->name('group');
Route::get('/private', [HomeController::class, 'private'])->name('private');
Route::get('/users', [HomeController::class, 'users'])->name('users');

Route::get('messages', [MessageController::class, 'fetchMessages']);
Route::post('messages', [MessageController::class, 'sendMessage']);
Route::get('/private-messages/{user}', [MessageController::class, 'privateMessages'])
        ->name('privateMessages');
Route::post('/private-messages/{user}', [MessageController::class, 'sendPrivateMessage'])
        ->name('privateMessages.store');
