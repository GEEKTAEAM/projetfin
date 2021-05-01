<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\connectController;



/*Route::get('/', function () {
    return view('back/dashbord');
});*/
//BACK ROUTE
Route::get('/', [adminController::class, 'index'])->name('index');
Route::get('/dashbord', [adminController::class,'dashbord'])->name('dashbord');

Route::get('/produits', [dashbordController::class,'produits'])->name('produits');
Route::get('/category', [dashbordController::class,'category'])->name('category');

Route::get('/users', [connectController::class,'users'])->name('users');
Route::get('/villes', [connectController::class,'villes'])->name('villes');
