<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PostController;
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

Route::get('/example-database', [DatabaseController::class, 'index']);

Route::view('/example-home', 'welcome');

Route::redirect('/', '/home');

Route::get('/login', [LoginController::class, 'form'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('/blog')->name('blog.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/feed/{format}', [PostController::class, 'jsonFeed'])->name('jsonFeed');
});

Route::middleware(['authentication'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('/users')->name('users.')->group(function() {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('/create', [UsersController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('edit');
        Route::match(['POST', 'PUT', 'PATCH'],'/{id?}', [UsersController::class, 'save'])->name('save');
        Route::delete('/{id}', [UsersController::class, 'delete'])->name('delete');
    });

    Route::prefix('/roles')->name('roles.')->group(function() {
        Route::get('/', [RolesController::class, 'index'])->name('index');
        Route::get('/create', [RolesController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [RolesController::class, 'edit'])->name('edit');
        Route::match(['POST', 'PUT', 'PATCH'],'/{id?}', [RolesController::class, 'save'])->name('save');
        Route::delete('/{id}', [RolesController::class, 'delete'])->name('delete');
    });

    Route::prefix('/types')->name('types.')->group(function() {
        Route::get('/', [TypesController::class, 'index'])->name('index');
        Route::get('/create', [TypesController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [TypesController::class, 'edit'])->name('edit');
        Route::match(['POST', 'PUT', 'PATCH'],'/{id?}', [TypesController::class, 'save'])->name('save');
        Route::delete('/{id}', [TypesController::class, 'delete'])->name('delete');
    });
});
