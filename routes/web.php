<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'home'])->name('home');


// Authentication
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerpost'])->name('user.register');
Route::post('/login', [UserController::class, 'loginpost'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// Find Listings

Route::get('/listings', [ListingController::class, 'showlistings'])->name('listing.show');
Route::get('/listings/{id}', [ListingController::class, 'singlelisting']);

// Route::middleware(['auth'])->group(function() {
    Route::get('/listings/form', [ListingController::class, 'showlistingsform'])->name('listing.form');
    Route::get('/listings/manage', [ListingController::class, 'manage']);
    Route::get('/listings/{id}', [ListingController::class, 'singlelisting']);
    Route::get('/listings/{id}/edit', [ListingController::class, 'edit']);
    Route::post('/listings/form', [ListingController::class, 'createlisting'])->name('listing.create');
    Route::put('/listings/{id}', [ListingController::class, 'update']);
    Route::delete('/listings/{id}', [ListingController::class, 'destroy']);
// });
