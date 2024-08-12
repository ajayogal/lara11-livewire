<?php

use App\Http\Controllers\HomeController;
use App\Livewire\UserDetail;
use App\Livewire\UsersList;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/users', UsersList::class)->name('users');
Route::get('/users/{id}', UserDetail::class)->name('userDetail');
