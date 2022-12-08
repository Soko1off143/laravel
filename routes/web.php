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

Route::get('/', [App\Http\Controllers\ComicsController::class, 'catalog']);
Route::get('/aboutUs', [App\Http\Controllers\ComicsController::class, 'aboutUs']);
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

// Test 
// Задача 16.1
Route::get('/test/form', [App\Http\Controllers\TestController::class, 'form']);
Route::get('/test/result', [App\Http\Controllers\TestController::class, 'result']);

// Задача 16.2
Route::get('/test/form1', [App\Http\Controllers\TestController::class, 'form1']);
Route::get('/test/result1', [App\Http\Controllers\TestController::class, 'result1']);

// Задача 16.3
Route::get('/test/form2', [App\Http\Controllers\TestController::class, 'form2']);
Route::get('/test/result2', [App\Http\Controllers\TestController::class, 'result2']);

// Задача 17.1
Route::get('/test/response', [App\Http\Controllers\TestController::class, 'response']);