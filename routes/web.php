<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SidebarTwoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [UserController::class,'index'])->name('');

Route::get('/', [AdminController::class,'admin'])->name('dashboard');



Route::group(['prefix' => 'sidebars'], function () {
    Route::get('/', [SidebarTwoController::class, 'create'])->name('sidebars.create');
    Route::post('/add', [SidebarTwoController::class, 'store'])->name('sidebars.add');
    Route::get('/index', [SidebarTwoController::class, 'index'])->name('sidebars.index');
    Route::get('/edit/{id}', [SidebarTwoController::class, 'edit'])->name('sidebars.edit');
    Route::post('/update/{id}', [SidebarTwoController::class, 'update'])->name('sidebars.update');
    Route::get('/delete/{id}', [SidebarTwoController::class, 'destroy'])->name('sidebars.delete');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'create'])->name('product.create');
    Route::post('/add', [ProductController::class, 'store'])->name('product.add');
    Route::get('/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});



