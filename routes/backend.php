<?php


use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\ServeicesController;
use Illuminate\Support\Facades\Route;


//---------------------------------------------------------------------------------------------------------------------------


Route::group(['middleware'=>'auth' ,'as'=>'backend.','prefix'=>'backend'],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('home');


    Route::resource('/gallery',GalleryController::class);

    Route::resource('/services',ServeicesController::class);
    Route::get('/services/unpublished/{id}',[ServeicesController::class,'unpublished'])
        ->name('services.unpublished');
    Route::get('/services/published/{id}',[ServeicesController::class,'published'])
        ->name('services.published');

    Route::get('/profile/setting',function (){
        return "OK";
    })->name('backend.profile.setting');
});
