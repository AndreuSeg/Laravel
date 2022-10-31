<?php

use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
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
Route::get('/contact', [MyFirstController::class, 'contactPage'])->name('contact.form');
Route::middleware('validate')->post('/contact', [MyFirstController::class, 'processContact'])->name('contact.process');
Route::view('/success', 'success')->name('success');
Route::get('/introduccion-a-blade', [IntroductionController::class, 'index'])->name('introduccion');


Route::name('website.')->prefix('/website')->group(function(){
    Route::get('{section}', [WebsiteController::class, 'section'])->name('section');

    Route::get('home', [WebsiteController::class, 'home'])->name('home');
    Route::get('who-we-are', [WebsiteController::class, 'who'])->name('who');
    Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
    Route::post('personalize', [WebsiteController::class, 'personalize'])->name('personalize');
    Route::post('contact', [WebsiteController::class, 'sendContact'])->name('sendContact');
});
