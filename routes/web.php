<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonaController;

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

// Route::get('/', [DashboardController::class, 'index']);
Route::get('/', 'App\Http\Controllers\DashboardController@index');

Route::get('create-category', [CategoryController::class, 'create']);

Route::post('post-category-form', [CategoryController::class, 'store']);

Route::get('all-categories', [CategoryController::class, 'index']);

Route::get('edit-category/{id}', [CategoryController::class, 'edit']);

Route::post('update-category-form/{id}', [CategoryController::class, 'update']);

Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

Route::get('create-blog', [BlogPostController::class, 'create']);

Route::post('store-blog-form', [BlogPostController::class, 'store']);

//User routes
Route::get('create-persona', [PersonaController::class, 'create']);
Route::get('all-personas', [PersonaController::class, 'index']);
Route::post('post-persona-form', [PersonaController::class, 'store']);
Route::get('delete-persona/{id}', [PersonaController::class, 'destroy']);
Route::get('edit-persona/{id}', [PersonaController::class, 'edit']);
Route::post('update-persona-form/{id}', [PersonaController::class, 'update']);


Route::get('create-multimedia', 'App\Http\Controllers\MultimediaController@create');
Route::get('all-multimedia', 'App\Http\Controllers\MultimediaController@index');





