<?php

use App\Http\Controllers\HomeController;
use App\Livewire\UserDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users', [HomeController::class, 'index'])->name('users');
Route::get('/users/{id}', UserDetail::class)->name('userDetail');
