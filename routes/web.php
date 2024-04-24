<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listcategories', [CategoryController::class, 'getCategory']);
Route::get('/listposts', [PostController::class, 'getPost']);
Route::get('/post', [PostController::class, 'getPosts']);
Route::get('/post/{id}',[PostController::class, 'show'])->name('post.show');
//     return view('index');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
