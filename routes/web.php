<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('/details/{id}', [PostController::class, 'show'])->name('details');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/insert', [PostController::class, 'store'])->name('store');
Route::post('/comment', [CommentController::class, 'store'])->name('store_comment');
Route::get('/comment/{post_id}', [CommentController::class, 'show'])->name('show_comment');


