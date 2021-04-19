<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicController;
use App\Http\Controllers\AdminController;
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
//出品者用ルーティング
Route::get('/mypage', [AdminController::class, 'index'])->middleware('auth');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DynamicController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/item_register', [AdminController::class, 'item_register'])->middleware('auth');
Route::post('/item_register', [AdminController::class, 'item_register_post'])->middleware('auth');
Route::get('/base', function () {
    return view('layouts.base');
})->middleware('auth');
Route::get('/item_edit/{id}', [AdminController::class, 'item_edit'])->middleware('auth');
Route::post('/item_edit', [AdminController::class, 'item_edit_post'])->middleware('auth');
