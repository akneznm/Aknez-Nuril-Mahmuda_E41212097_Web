<?php

// use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\Frontend\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['namespace' => 'Frontend'], function () {
Route::get('/home', [HomeController::class, 'index']);
// });
// Route::get('home', [HomeController::class, 'index'])->name('home');
