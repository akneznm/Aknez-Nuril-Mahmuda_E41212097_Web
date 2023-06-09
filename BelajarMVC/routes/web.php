<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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

// Route::get('/user', 'ManagementUserController@index');
// Route::resource('/user', 'ManagementUserController@index');
Route::get("/home", function () {
  return view("home");
});
Route::get('create', [ManagementUserController::class, 'create']);
Route::get('user', [ManagementUserController::class, 'index']);
