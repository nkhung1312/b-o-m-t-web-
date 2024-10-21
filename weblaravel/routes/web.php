<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//frontend
Route::get('/',[HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);

//backend
Route::get('/admin',[AdminController::class,'index']);
