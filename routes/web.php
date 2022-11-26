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

Route::get('/', [App\Http\Controllers\ComicsController::class, 'aboutUs']);
Route::get('/catalog', [App\Http\Controllers\ComicsController::class, 'catalog']);
Route::get('/comics{id}', [App\Http\Controllers\ComicsController::class, 'comics']);
Route::get('/wheretofindus', [App\Http\Controllers\ComicsController::class, 'whereToFindUs']);

Route::get('/admin', [App\Http\Controllers\Admin::class, 'admin']);
Route::get('/admin/comics', [App\Http\Controllers\Admin::class, 'сomics']);
Route::get('/admin/comics/delete{id}', [App\Http\Controllers\Admin::class, 'delete']);
Route::get('/admin/comics/redactor{id}', [App\Http\Controllers\Admin::class, 'redactor']);
Route::match(['get', 'post'],'/admin/comics/redactor{id}/change', [App\Http\Controllers\Admin::class, 'change']);
Route::get('/admin/comics/create', [App\Http\Controllers\Admin::class, 'create']);
Route::match(['get', 'post'], '/admin/comics/create/add', [App\Http\Controllers\Admin::class, 'add']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
