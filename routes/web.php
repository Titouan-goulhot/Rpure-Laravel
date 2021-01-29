<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);


