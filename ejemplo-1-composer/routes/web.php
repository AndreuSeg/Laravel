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

/* Route::get('/post/{slug?}', function ($slug = null) {
    if ($slug == null) {
        $this->RecuperamosMiUltimoPost();
    } else
        $post = $this->RecuperarMiPostConSlug($slug);
    return $post;
}); */


/* Route::get('/{category}/{slug}/{uuid}', function ($category = 'a', $slug = 'post') {
    echo $category . '<br>', $slug;
})->whereAlpha('category')->whereAlphaNumeric('slug')->whereUuid('uuid'); */


/* Route::get('/my-controller/{id?}', [MyFirstController::class, 'myControlerFunction'])->whereNumber('id'); */


/* Route::get('hola1/{category}/{slug}', function($category = 'a', $slug = ''){
    echo $category. '<br>'. $slug;
})->where('category', '[0-9]+'); */


/* Route::get('hola2/{category2}/{slug2}', function($category2 = 'a', $slug2 = ''){
    echo $category2. '<br>'. $slug2;
})->where(
    ['category2'=>'[0-9]+'],
    ['slug2'=>'[a-z]+']
); */


/* Route::get('/my-example', function(){
    echo 'Hola';
})->name('miIndex'); */

/* Route::view('myRoutename', 'routename'); */


Route::view('/', 'home');
Route::get('/contact', [MyFirstController::class, 'contactPage']);
Route::post('/contact', [MyFirstController::class, 'processContact']);
Route::put('/contact', [MyFirstController::class, 'processContactPut']);


// Route::put('/contact', [MyFirstController::class, 'processContact']);
// Route::patch('/contact', [MyFirstController::class, 'processContact']);
// Route::delete('/contact', [MyFirstController::class, 'processContact']);
// Route::head('/contact', [MyFirstController::class, 'processContact']);
// Route::options('/contact', [MyFirstController::class, 'processContact']);
