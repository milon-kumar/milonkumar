<?php


use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\ServeicesController;
use App\Http\Controllers\backend\WorkCategoryController;
use App\Http\Controllers\backend\WorkController;
use Illuminate\Support\Facades\Route;


//---------------------------------------------------------------------------------------------------------------------------


Route::group(['middleware'=>'auth' ,'as'=>'backend.','prefix'=>'backend'],function (){
//      This is Dashboard Controller
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('home');

//      This is Gallery Section Controller
    Route::resource('/gallery',GalleryController::class);
    Route::get('/gallery/unpublished/{id}',[GalleryController::class,'unpublished'])
        ->name('gallery.unpublished');
    Route::get('/gallery/published/{id}',[GalleryController::class,'published'])
        ->name('gallery.published');


//      This is Services Controller
    Route::resource('/services',ServeicesController::class);
    Route::get('/services/unpublished/{id}',[ServeicesController::class,'unpublished'])
        ->name('services.unpublished');
    Route::get('/services/published/{id}',[ServeicesController::class,'published'])
        ->name('services.published');


//      This is work Section Wroks Controller
    Route::resource('/works/categories',WorkCategoryController::class);

    Route::get('/categories/unpublished/{id}',[WorkCategoryController::class,'unpublished'])
        ->name('categories.unpublished');
    Route::get('/categories/published/{id}',[WorkCategoryController::class,'published'])
        ->name('categories.published');


//    Thsi is Route For Works
    Route::resource('/works',WorkController::class);

    Route::get('/work/unpublished/{id}',[WorkController::class,'unpublished'])
        ->name('works.unpublished');
    Route::get('/work/published/{id}',[WorkController::class,'published'])
        ->name('works.published');


    Route::get('/profile/setting',function (){
        return "OK";
    })->name('backend.profile.setting');
});
