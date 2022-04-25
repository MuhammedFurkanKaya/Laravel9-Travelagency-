<?php

use App\Http\Controllers\AdminPanelHomeController;
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
Route::get('/admin', [AdminPanelHomeController::class, 'index'])->name('admin');
//*********************** ADMİN CATEGORY ROUTES ************************
Route::get('/admin/category', [AdminPanelCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminPanelCategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [AdminPanelCategoryController::class, 'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}', [AdminPanelCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [AdminPanelCategoryController::class, 'update'])->name('admin_category_update');
Route::get('/admin/category/destroy/{id}', [AdminPanelCategoryController::class, 'destroy'])->name('admin_category_destroy');
Route::get('/admin/category/show/{id}', [AdminPanelCategoryController::class, 'show'])->name('admin_category_show');
