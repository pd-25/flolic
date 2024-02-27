<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Auth\AuthController;
use App\Http\Controllers\admin\project\ProjectController;
use App\Http\Controllers\admin\testimonials\TestimonialController;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
// 
Route::group(['prefix'=>'admin', 'middleware'=>'admin'],function(){
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
Route::resource('/projects', ProjectController::class);
Route::resource('/testimonials', TestimonialController::class);
Route::post('/delete/image', [ProjectController::class, 'deleteImage'])->name('admin.deleteImage');


Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});

