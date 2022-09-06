<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\AdminRecipiController;

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
