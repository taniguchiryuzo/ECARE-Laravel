<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\AdminRecipiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//レシピ
Route::get('/admin/recipis', [AdminRecipiController::class, 'index'])->name('admin.recipis.index');
Route::get('/admin/recipis/create', [AdminRecipiController::class, 'create'])->name('admin.recipis.create');
Route::post('/admin/recipis', [AdminRecipiController::class, 'store'])->name('admin.recipis.store');
Route::get('/admin/recipis/{recipi}', [AdminRecipiController::class, 'edit'])->name('admin.recipis.edit');

// ユーザー登録
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');

// 認証
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
