<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\RoomAdminController;
use App\Http\Controllers\RoomUserController;
use App\Http\Controllers\SaranAdminController;

Route::get('/login', [AuthController::class, 'index'])->middleware('guest');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);



Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'doRegister']);


// ========== H O M E ============
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardUserController::class, 'index']);
Route::get('/room', [RoomUserController::class, 'index']);

Route::get('/contact', [ContactUserController::class, 'index']);
Route::post('/saran', [ContactUserController::class, 'saran']);



Route::get('/room/show/{id}', [RoomUserController::class, 'show']);
Route::get('/room/invoice/{id}', [RoomUserController::class, 'invoice']);
Route::post('/room/submitOrder', [RoomUserController::class, 'submitOrder'])->middleware('auth');



// ============= A D M I N ==============
Route::get('/admin/dashboard', [DashboardAdminController::class, 'index']);
Route::resource('/admin/room', RoomAdminController::class);
Route::get('/admn/saran', function () {
  return view('admin.layouts.wrapper', [
    'title'    => 'Saran',
    'content'   => 'admin/saran/index'
  ]);
});
// Route::get('/admin/saran', [SaranAdminController::class, 'index']);

Route::get('/admin/order', [OrderAdminController::class, 'index']);
