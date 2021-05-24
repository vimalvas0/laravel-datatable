<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Auth\LoginController;


Auth::routes();

Route::get('/', function(){
    return redirect('login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('home.logout');

// Route::view('/gallery', 'gallery');

Route::middleware('auth')->group(function(){
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::get('/remove/{id}', [HomeController::class, 'remove'])->name('home.remove');

    Route::post('/editUser', [HomeController::class, 'editUser'])->name('home.editUser');
    Route::post('/removeUser', [HomeController::class, 'removeUser'])->name('home.removeUser');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

    Route::post('/storeImage', [GalleryController::class, 'storeImage'])->name('gallery.store');

    Route::get('/deleteImage/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');

});



