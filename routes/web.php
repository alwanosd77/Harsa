<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
    return view('admin.pages.dashboard');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/posts', [PostsController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');;
    Route::post('/posts/save', [PostsController::class, 'store'])->name('posts.save');;
    Route::post('/posts/update/{slug}', [PostsController::class, 'update'])->name('posts.update');;
    Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.delete');;
    Route::get('/posts/edit/{slug}', [PostsController::class, 'edit'])->name('posts.edit');;
});
