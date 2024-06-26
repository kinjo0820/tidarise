<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('index'))->name('index');


Route::get('/like', fn() => view('like'))->middleware('auth');


Route::get('/messages', fn() => view('messages'))->middleware('auth');


//プロフィール画面
//基本情報
Route::get('/profile',[ProfileController::class, 'edit'])->name('users.profile.edit')->middleware('auth');
Route::get('/profile/personality',[ProfileController::class, 'personality'])->name('users.profile.personality')->middleware('auth');
Route::put('/profile/personality/{id}', [ProfileController::class, 'updatePersonality'])->name('users.profile.updatePersonality')->middleware('auth');

//学歴
Route::get('/profile/educations',[ProfileController::class, 'educations'])->name('users.profile.educations')->middleware('auth');
Route::put('/profile/educations/{id}', [ProfileController::class, 'updateEducations'])->name('users.profile.updateEducations')->middleware('auth');



// ユーザー登録
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

//　ユーザー認証
Route::get('/users/login', [AuthController::class, 'showLoginForm'])->name('users.showLoginForm');
Route::post('/users/login', [AuthController::class, 'login'])->name('users.login');
Route::post('/users/logout', [AuthController::class, 'logout'])->name('users.logout');


//企業画面
Route::get('/admin', fn() => view('admin.index'))->name('admin.index');
Route::get('/admin/users', fn() => view('admin.users.index'))->name('admin.users.index');
Route::get('/admin/offer', fn() => view('admin.offer.index'))->name('admin.offer.index');



//企業新規登録
Route::get('/admin/company/', [CompanyController::class, 'index'])->name('admin.company.index');
Route::get('/admin/company/create', [CompanyController::class, 'create'])->name('admin.company.create');
Route::post('/admin/company/store', [CompanyController::class, 'store'])->name('admin.company.store');
Route::get('/admin/company/edit/{id}', [CompanyController::class, 'edit'])->name('admin.company.edit');
Route::put('/admin/company/edit/{id}', [CompanyController::class, 'update'])->name('admin.company.update');



