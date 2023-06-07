<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogPostController::class,'index']);
Route::get('/blog/{id}',[BlogPostController::class,'show']);
// Route::get('/blog/{blogPost}',[BlogPostController::class,'show']);

Route::get('/blog/create/post',[BlogPostController::class,'create']);
Route::post('/blog/create/post',[BlogPostController::class,'store']);
Route::get('/blog/{blogPost}/edit',[BlogPostController::class,'edit']);
Route::put('/blog/{blogPost}/edit',[BlogPostController::class,'update']);
Route::delete('/blog/{blogPost}',[BlogPostController::class,'destroy']);

Route::get('/blog/users/{id}',[UserController::class,'showUser'])->name('users.showUser');
// Route::get('users/post/{id}',[UserController::class,'showPost'])->name('users.showPost');
Route::get('/blog/users/viewpost/{id}',[UserController::class,'view']);
