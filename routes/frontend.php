<?php

use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

//---------------------------------------------------------------------------------------------------------------------

Route::get('/home',[HomeController::class,'home'])->name('frontend.home');
Route::get('/gallery',[GalleryController::class,'gallery'])->name('frontend.gallery');
