<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashbaordController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');

Auth::routes();

Route::get('/dashboard', [DashbaordController::class,'dashboard'])->name('dashboard');


Route::get('/dashboard/category', [CategoryController::class,'category'])->name('category');
Route::post('/dashboard/category', [CategoryController::class,'categoryInsert'])->name('category.insert');
Route::get('/dashboard/category-delete/{id}', [CategoryController::class,'categoryDelete'])->name('category.delete');
Route::get('/dashboard/category-edit/{id}', [CategoryController::class,'categoryEdit'])->name('category.edit');
Route::put('/dashboard/category-update/{id}', [CategoryController::class,'updateCategory'])->name('category.update');


Route::get('/dashboard/sub-category', [CategoryController::class,'subCategory'])->name('subcategory');