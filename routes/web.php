<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticlesController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/welcome', function () {
//    return view('welcome');
//});
//
//Route::get('/home', function () {
//    return view('test');
//});

Route::get('/blog/{article}', [ArticlesController::class, 'show']);

Route::get('/welcome', [WelcomeController::class, 'show']);
Route::get('/home', [HomeController::class, 'show']);
Route::get('/profile',[ProfileController::class, 'show']);
Route::get('/faq',[FaqController::class, 'show']);
Route::get('/dashboard',[DashboardController::class, 'show']);
Route::get('/blog',[BlogController::class, 'show']);
Route::get('/post',[PostController::class, 'show']);
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');
