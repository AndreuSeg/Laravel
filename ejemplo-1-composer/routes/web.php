<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use Psy\Command\WhereamiCommand;

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

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact.form');
// Route::get('/contact', [MyFirstController::class, 'contactPage'])->name('contact.form');
Route::middleware('validate')->post('/contact', [MyFirstController::class, 'processContact'])->name('contact.process');
Route::view('/success', 'success')->name('success');

Route::view('/introduccion-a-blade', 'introduccion')->name('introduccion');
