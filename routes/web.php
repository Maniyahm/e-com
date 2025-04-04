<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::middleware('auth')->group(function (){

Route::get('/pro',[ProductController::class,'index'])->name('home');
    
});

Route::get('/create',[ProductController::class,'create'])->name('create');
Route::Post('/store',[ProductController::class,'store'])->name('products.store');
Route::get('/edit/{product}',[ProductController::class,'edit'])->name('products.edit');
Route::put('/update/{product}',[ProductController::class,'update'])->name('products.update');
Route::delete('/delete/{product}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('/Product',[ProductController::class,'list'])->name('products.list');


Route::get('/category',[CategoryController::class,'index'])->name('category.home');
Route::get('category/create',[CategoryController::class,'create'])->name('category.index');
Route::Post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{category}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('category/update/{category}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/delete/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('category/{slug}',[CategoryController::class,'show'])->name('category.show');



Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/services',[PageController::class,'services'])->name('services');
Route::get('/contact',[PageController::class,'contact'])->name('contact');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
