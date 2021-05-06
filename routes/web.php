<?php

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

Route::get('/', 'WelcomeController@index')->name('root');

// Route::get('/home', 'WelcomeController@home')
//     ->middleware('auth')
//     ->name('home');

// Route::get('/hola/{name}', 'WelcomeController@hello')->name('welcome.hello');

// Route::resource('products', 'ProductsController');
// Route::get('/productos', 'ProductsController@index')->name('productos.index');
// Route::get('/productos/nuevo', 'ProductsController@create')->name('productos.create');
// Route::post('/productos', 'ProductsController@store')->name('productos.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
