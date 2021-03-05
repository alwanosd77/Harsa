<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectController;

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

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', function () {
            return view('admin.pages.dashboard');
        })->name('dashboard');


        //post
        Route::get('/Posts', [PostsController::class, 'index'])->name('Posts');
        Route::get('/Posts/create', [PostsController::class, 'create'])->name('Posts.create');
        Route::post('/Posts/save', [PostsController::class, 'store'])->name('Posts.save');
        Route::post('/Posts/update/{slug}', [PostsController::class, 'update'])->name('Posts.update');
        Route::delete('/Posts/{id}', [PostsController::class, 'destroy'])->name('Posts.delete');
        Route::get('/Posts/edit/{slug}', [PostsController::class, 'edit'])->name('Posts.edit');

        //project
        Route::get('/Project', [ProjectController::class, 'index'])->name('Project');
        Route::get('/Project/create', [ProjectController::class, 'create'])->name('Project.create');
        Route::post('/Project/save', [ProjectController::class, 'store'])->name('Project.save');
        Route::post('/Project/update/{slug}', [ProjectController::class, 'update'])->name('Project.update');
        Route::delete('/Project/{id}', [ProjectController::class, 'destroy'])->name('Project.delete');
        Route::get('/Project/edit/{slug}', [ProjectController::class, 'edit'])->name('Project.edit');
    });
});



require __DIR__ . '/auth.php';
