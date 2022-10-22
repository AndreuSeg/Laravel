<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;

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

Route::view('/', 'home');
Route::get('/contact', [MyFirstController::class, 'contactPage']);
Route::post('/contact', [MyFirstController::class, 'processContact']);
Route::put('/contact', [MyFirstController::class, 'processContactPut']);


// Route::put('/contact', [MyFirstController::class, 'processContact']);
// Route::patch('/contact', [MyFirstController::class, 'processContact']);
// Route::delete('/contact', [MyFirstController::class, 'processContact']);
// Route::head('/contact', [MyFirstController::class, 'processContact']);
// Route::options('/contact', [MyFirstController::class, 'processContact']);
