<?php

use App\Http\Controllers\AdminPanelHomeController;
use App\Http\Controllers\AdminPanelMessageController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelCategoryController;
use App\Http\Controllers\AdminPanelImageController;



Route::get('/', function () {
    return view('welcome');
});
//*********************** HOME PAGE ROUTES ************************
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');






Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('test');

Route::get('/product/{id}',[HomeController::class,'product'])->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*********************** ADMİN PANEL ROUTES ************************
Route::prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminPanelHomeController::class, 'index'])->name('index');
//*********************** General Routes ROUTES ************************
    Route::get('/setting', [AdminPanelHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminPanelHomeController::class, 'settingUpdate'])->name('setting.update');
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

    //*********************** ADMİN PRODUCT IMAGE GALLERY ROUTES ************************
    Route::prefix('/image')->name('image.')->controller(AdminPanelImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');

    });

    //*********************** ADMİN MESSAGE ROUTES ************************
    Route::prefix('/message')->name('message.')->controller(AdminPanelMessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });
});
