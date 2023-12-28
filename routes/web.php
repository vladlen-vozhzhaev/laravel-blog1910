<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [ArticleController::class, 'showAllArticles']);
Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware(['auth'])->name('dashboard');
Route::view('/addArticle', 'pages.addArticle')->middleware('auth');
Route::post('/addArticle', [ArticleController::class, 'addArticle'])->middleware('auth');
Route::get('/blog/{articleId}', [ArticleController::class, 'showArticle']);
Route::get('/editArticle/{articleId}', [ArticleController::class, 'showEditArticle'])->middleware('auth');
Route::post('/editArticle', [ArticleController::class, 'editArticle'])->middleware('auth');
Route::post('/addComment', [CommentController::class, 'addComment'])->middleware('auth');
require __DIR__.'/auth.php';
