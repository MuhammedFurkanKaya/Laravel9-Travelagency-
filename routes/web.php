<?php

use App\Http\Controllers\AdminPanelHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelCategoryController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*********************** ADMİN PANEL ROUTES ************************
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminPanelHomeController::class, 'index'])->name('index');
//*********************** ADMİN CATEGORY ROUTES ************************
     Route::prefix('/category')->name('category.')->controller(AdminPanelCategoryController::class)->group(function () {
         Route::get('/','index')->name('index');
         Route::get('/create','create')->name('create');
         Route::post('/store','store')->name('store');
         Route::get('/edit/{id}','edit')->name('edit');
         Route::post('/update/{id}','update')->name('update');
         Route::get('/destroy/{id}','destroy')->name('destroy');
         Route::get('/show/{id}','show')->name('show');
      });

    //*********************** ADMİN PRODUCT ROUTES ************************
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
});
