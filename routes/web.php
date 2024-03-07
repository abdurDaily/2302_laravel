<?php

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
