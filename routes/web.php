<?php

namespace App\Http\Controllers\Web;

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

Route::redirect ( '/', 'login' );
Route::get ( 'login', [ LoginController::class, 'create' ] )->name ( 'login' );
Route::post ( 'login', [ LoginController::class, 'store' ] )->name ( 'login' );
Route::get ( 'register', [ RegisterController::class, 'create' ] )->name ( 'register' );
Route::post ( 'register', [ RegisterController::class, 'store' ] )->name ( 'register' );

Route::get ( 'dashboard', [ DashboardController::class, 'index' ] )->name ( 'dashboard' );
