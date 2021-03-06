<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products', [ProductController::class, 'store']);

Route::get('/', [ProductController::class, 'index']);
Route::get('/user/login', [UserController::class, 'login']);
Route::get('/user/detail{id}', [UserController::class, 'getUserDetail']);
Route::get('/user/register', [UserController::class, 'register']);
Route::post('/user/register', [UserController::class, 'processRegister']);

Route::get('/admin', [LayoutController::class, 'index']);
Route::get('/test', [LayoutController::class, 'layout']);
Route::get('/admin/list', [LayoutController::class, 'list']);
Route::get('/admin/form', [LayoutController::class, 'form']);
Route::get('/admin/calendar', [LayoutController::class, 'calendar']);
Route::get('/admin/ui', [LayoutController::class, 'ui']);
