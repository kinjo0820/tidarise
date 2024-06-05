<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', fn() => view('index'))->name('index');


Route::get('/like', fn() => view('like'))->middleware('auth');


Route::get('/messages', fn() => view('messages'))->middleware('auth');


//プロフィール画面
Route::get('/user/{id}',[UserController::class, 'show'])->name('users.show')->middleware('auth');


// ユーザー登録
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

//　ユーザー認証
Route::get('/users/login', [AuthController::class, 'showLoginForm'])->name('users.showLoginForm');
Route::post('/users/login', [AuthController::class, 'login'])->name('users.login');



