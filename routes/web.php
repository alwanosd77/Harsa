<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GeneralController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/projects', [LandingController::class, 'project'])->name('landing.project');
Route::get('/projects/{slug}', [LandingController::class, 'projectDetail'])->name('landing.project.detail');

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

        //service
        Route::get('/Service', [ServiceController::class, 'index'])->name('Service');
        Route::get('/Service/create', [ServiceController::class, 'create'])->name('Service.create');
        Route::post('/Service/save', [ServiceController::class, 'store'])->name('Service.save');
        Route::post('/Service/update/{slug}', [ServiceController::class, 'update'])->name('Service.update');
        Route::delete('/Service/{id}', [ServiceController::class, 'destroy'])->name('Service.delete');
        Route::get('/Service/edit/{slug}', [ServiceController::class, 'edit'])->name('Service.edit');

        //employee
        Route::get('/Employee', [EmployeeController::class, 'index'])->name('Employee');
        Route::get('/Employee/create', [EmployeeController::class, 'create'])->name('Employee.create');
        Route::post('/Employee/save', [EmployeeController::class, 'store'])->name('Employee.save');
        Route::post('/Employee/update/{id}', [EmployeeController::class, 'update'])->name('Employee.update');
        Route::delete('/Employee/{id}', [EmployeeController::class, 'destroy'])->name('Employee.delete');
        Route::get('/Employee/edit/{id}', [EmployeeController::class, 'edit'])->name('Employee.edit');

        Route::get('/Partner', [PartnerController::class, 'index'])->name('Partner');
        Route::get('/Partner/create', [PartnerController::class, 'create'])->name('Partner.create');
        Route::post('/Partner/save', [PartnerController::class, 'store'])->name('Partner.save');
        Route::post('/Partner/update/{id}', [PartnerController::class, 'update'])->name('Partner.update');
        Route::delete('/Partner/{id}', [PartnerController::class, 'destroy'])->name('Partner.delete');
        Route::get('/Partner/edit/{id}', [PartnerController::class, 'edit'])->name('Partner.edit');

        Route::get('/Slider', [SliderController::class, 'index'])->name('Slider');
        Route::get('/Slider/create', [SliderController::class, 'create'])->name('Slider.create');
        Route::post('/Slider/save', [SliderController::class, 'store'])->name('Slider.save');
        Route::post('/Slider/update/{id}', [SliderController::class, 'update'])->name('Slider.update');
        Route::delete('/Slider/{id}', [SliderController::class, 'destroy'])->name('Slider.delete');
        Route::get('/Slider/edit/{id}', [SliderController::class, 'edit'])->name('Slider.edit');

        Route::post('/General/update', [GeneralController::class, 'update'])->name('General.update');
        Route::get('/General/edit', [GeneralController::class, 'edit'])->name('General.edit');

        Route::get('/Gallery/create', [GalleryController::class, 'create'])->name('Gallery.create');
        Route::post('/Gallery/save', [GalleryController::class, 'store'])->name('Gallery.save');
        Route::get('/Gallery', [GalleryController::class, 'index'])->name('Gallery');
        Route::delete('/Gallery/{id}', [GalleryController::class, 'destroy'])->name('Gallery.delete');
    });
});



require __DIR__ . '/auth.php';
