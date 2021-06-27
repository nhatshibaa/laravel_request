<?php

use App\Http\Controllers\LayoutController;
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
Route::get('/user/login', [UserController::class, 'login']);
Route::get('/user/detail{id}', [UserController::class, 'getUserDetail']);
Route::get('/user/register', [UserController::class, 'register']);
Route::post('/user/register', [UserController::class, 'processRegister']);

Route::get('/layout', [LayoutController::class, 'layout']);
Route::get('/layout/index', [LayoutController::class, 'index']);
Route::get('/layout/list', [LayoutController::class, 'list']);
Route::get('/layout/form', [LayoutController::class, 'form']);
Route::get('/layout/calendar', [LayoutController::class, 'calendar']);
Route::get('/layout/ui', [LayoutController::class, 'ui']);
