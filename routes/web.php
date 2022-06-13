<?php

use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminPanelFaqController;
use App\Http\Controllers\AdminPanelHomeController;
use App\Http\Controllers\AdminPanelMessageController;
use App\Http\Controllers\AdminPanelUserController;
use App\Http\Controllers\AdminPackagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class, 'loginadmincheck'])->name('loginadmincheck');








Route::get('/test',[HomeController::class, 'test'])->name('test');


Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('test');

Route::get('/packages/{id}',[HomeController::class,'packages'])->name('packages');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*********************** USER AUTH CONTROL ************************
Route::middleware('auth')->group(function (){
//*********************** USER PANEL ROUTES ************************
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}','reviewdestroy')->name('reviewdestroy');
    });

//*********************** ADMİN PANEL ROUTES ************************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
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

    //*********************** ADMİN PACKAGES ROUTES ************************
    Route::prefix('/packages')->name('packages.')->controller(AdminPackagesController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //*********************** ADMİN PACKAGES IMAGE GALLERY ROUTES ************************
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

    //*********************** ADMİN FAQ ROUTES ************************
    Route::prefix('/faq')->name('faq.')->controller(AdminPanelFaqController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //*********************** ADMİN COMMENT ROUTES ************************
    Route::prefix('/comment')->name('comment.')->controller(AdminCommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    //*********************** ADMİN USER ROUTES ************************
    Route::prefix('/user')->name('user.')->controller(AdminPanelUserController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/edit/{id}','show')->name('edit');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/addrole/{id}','addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
    });
});
});
