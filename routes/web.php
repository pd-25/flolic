<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('optimize', function () {

    \Artisan::call('optimize:clear');

    dd("optimize is cleared");

});

Route::get('storage', function () {

    \Artisan::call('storage:link');

    dd("storage is link");

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/ceo-desk', [IndexController::class, 'ceo_desk'])->name('ceo-desk');
Route::get('/our-project', [IndexController::class, 'our_project'])->name('our-project');
Route::get('/single-project/{slug}', [IndexController::class, 'single_project'])->name('single_project');
Route::get('/testimonials', [IndexController::class, 'testimonials'])->name('testimonials');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [IndexController::class, 'contactPost'])->name('contactPost');

//service
Route::get('/electrical-design', [IndexController::class, 'electrical_design'])->name('electrical-design');
Route::get('/hvac-design', [IndexController::class, 'hvac_design'])->name('hvac-design');
Route::get('/phe-design', [IndexController::class, 'phe_design'])->name('phe-design');
Route::get('/fire-system-design', [IndexController::class, 'fire_system_design'])->name('fire-system-design');
Route::get('/elv-network-design', [IndexController::class, 'elv_network_design'])->name('elv-network-design');
Route::get('/cctv-and-security-system-design', [IndexController::class, 'cctv_and_security_system_design'])->name('cctv-and-security-system-design');









