<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class , 'index'])->name('index');

Route::get('/add', [UserController::class , 'add'])->name('add');

Route::post('/store', [UserController::class , 'store'])->name('store');


Route::get('/edit/{id}', [UserController::class , 'edit'])->name('edit');

Route::post('/update/{id}', [UserController::class , 'update'])->name('update');


Route::get('/delete/{id}', [UserController::class , 'delete'])->name('delete');


Route::get('/view/{id}', [UserController::class , 'view'])->name('view');

