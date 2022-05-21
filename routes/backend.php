<?php


use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GalleryController;
use Illuminate\Support\Facades\Route;


//---------------------------------------------------------------------------------------------------------------------------


Route::group(['middleware'=>'auth' ,'as'=>'backend.','prefix'=>'backend'],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('home');


    Route::resource('/gallery',GalleryController::class);




    Route::get('/profile/setting',function (){
        return "OK";
    })->name('backend.profile.setting');
});
