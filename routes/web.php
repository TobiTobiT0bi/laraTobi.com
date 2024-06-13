<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/products');
});

Route::resource('students', StudentController::class);
Route::resource('classes', ClassesController::class);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('brands', BrandController::class);
