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

Route::get('/listings/form', [ListingController::class, 'showlistingsform'])->name('listings.form');
Route::get('/listings/manage', [ListingController::class, 'manage']);
Route::get('/listings/{id}/edit', [ListingController::class, 'edit'])->name('listing.edit');
Route::get('/listings/{id}', [ListingController::class, 'singlelisting']);
Route::post('/listings/form', [ListingController::class, 'createlisting'])->name('listing.create');
Route::put('/listings/{id}', [ListingController::class, 'update'])->name('listing.update');
Route::delete('/listings/{id}', [ListingController::class, 'destroy'])->name('listing.destroy');
Route::get('/listings', [ListingController::class, 'showlistings'])->name('listing.show');


