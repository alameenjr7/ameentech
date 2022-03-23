<?php

use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;






// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class,'index'])->name('acceuil');
Route::get('/apropos',[IndexController::class,'apropos'])->name('apropos');
Route::get('/blog',[IndexController::class,'blog'])->name('blog');
Route::get('/realisation',[IndexController::class,'cas'])->name('realisation');
Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::get('/service',[IndexController::class,'service'])->name('service');
