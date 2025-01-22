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
Route::get('/listings/form', [ListingController::class, 'showlistingsform'])->middleware('auth')->name('listing.form');
Route::get('/listings/manage', [ListingController::class, 'manage'])->name('listing.manage');
Route::get('/listings/{listing}', [ListingController::class, 'singlelisting'])->name('listing.single');
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit');
Route::post('/listings/form', [ListingController::class, 'createlisting'])->middleware('auth')->name('listing.create');
Route::put('/listings/{id}', [ListingController::class, 'update'])->name('listing.update');
Route::delete('/listings/{id}', [ListingController::class, 'destroy'])->name('listing.destroy');



