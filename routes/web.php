<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',[HomeController::class,'index']);


//Admin
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

Route::get('admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('admin/logout',[HomeController::class,'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
