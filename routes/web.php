<?php

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

Route::get('/login', [App\Http\Controllers\ComicsController::class, 'auth']);
Route::get('/register', [App\Http\Controllers\ComicsController::class, 'auth']);
Route::get('/logout', [App\Http\Controllers\ComicsController::class, 'auth']);

Route::get('/', [App\Http\Controllers\ComicsController::class, 'whereToFindUs']);
Route::get('/catalog', [App\Http\Controllers\ComicsController::class, 'catalog']);
Route::get('/comics{id}', [App\Http\Controllers\ComicsController::class, 'comics']);
Route::get('/wheretofindus', [App\Http\Controllers\ComicsController::class, 'whereToFindUs']);

Route::get('/admin', [App\Http\Controllers\ComicsController::class, 'admin']);
Route::get('/admin/comics', [App\Http\Controllers\ComicsController::class, 'adminComics']);
Route::get('/admin/comics/redactor/{id}', [App\Http\Controllers\ComicsController::class, 'redactor']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
