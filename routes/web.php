<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerpost'])->name('user.register');
Route::post('/login', [UserController::class, 'loginpost'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// Listings
Route::get('/', [ListingController::class, 'showlistings']);
Route::get('/listings/create', [ListingController::class, 'showlistingsform']);
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
Route::get('/listings/{listing}', [ListingController::class, 'singlelisting']);
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
Route::post('/listings', [ListingController::class, 'createlisting'])->name('listing.create')->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update']);
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);



