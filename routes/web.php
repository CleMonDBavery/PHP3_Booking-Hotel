<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product\CategoryController as AdminCategoryController;
use App\Http\Controllers\Client\Product\CategoryController as ClientCategoryController;


// Route::get('/', [AdminCategoryController::class, 'index']);
// Route::get('/san-pham', [AdminCategoryController::class, 'index']);

// // slug
// Route::get('/product', [AdminCategoryController::class, 'index']);


Route::get('/', function () {
    return view('client.index');
})->name('home');
Route::get('about', function () {
    return view('client.about');
})->name('about');
Route::get('room', function () {
    return view('client.room');
})->name('room');
Route::get('gallery', function () {
    return view('client.gallery');
})->name('gallery');
Route::get('blog', function () {
    return view('client.blog');
})->name('blog');
Route::get('contact', function () {
    return view('client.contact');
})->name('contact');
Route::get('account', function () {
    return view('client.account');
})->name('account');


