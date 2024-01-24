<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ProjectController::class, 'layout']);

// Route::resource('users', UserController::class);
Route::get('/about', [WorksController::class, 'about'])->name('about');
Route::get('/services', [WorksController::class, 'service']);
// Route::get('/works/showproject', [WorksController::class, 'showproject'])->name('works.showproject');
Route::get('/works/portfolio-details', [WorksController::class, 'single']);
Route::get('/works/portfolio-details1', [WorksController::class, 'single1']);
Route::get('/works/portfolio-details2', [WorksController::class, 'single2']);
Route::get('/works/portfolio-details3', [WorksController::class, 'single3']);
Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
