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

Route::get('/test', [App\Http\Controllers\ComicsController::class, 'test']);
Route::get('/', [App\Http\Controllers\ComicsController::class, 'whereToFindUs']);
Route::get('/catalog', [App\Http\Controllers\ComicsController::class, 'catalog']);
Route::get('/comics{id}', [App\Http\Controllers\ComicsController::class, 'comics']);

Route::get('/wheretofindus', [App\Http\Controllers\TestController::class, 'whereToFindUs']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
