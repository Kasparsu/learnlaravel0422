<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'index']);
Route::get('/admin', [ArticleController::class, 'index']);
Route::get('/admin/create', [ArticleController::class, 'create']);
Route::post('/admin', [ArticleController::class, 'store']);
Route::get('/admin/{article}', [ArticleController::class, 'edit']);
Route::post('/admin/{article}', [ArticleController::class, 'update']);
Route::get('/admin/{article}/delete', [ArticleController::class, 'destroy']);
