<?php

use App\Http\Controllers\AdminPanelHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+'])->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*********************** ADMİN PANEL ROUTES ************************
Route::get('/admin', [AdminPanelHomeController::class, 'index'])->name('admin');
//*********************** ADMİN CATEGORY ROUTES ************************
Route::get('/admin/category', [\App\Http\Controllers\AdminPanelCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [\App\Http\Controllers\AdminPanelCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [\App\Http\Controllers\AdminPanelCategoryController::class, 'store'])->name('admin_category_store');
