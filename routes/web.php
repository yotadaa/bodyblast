<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
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
})->name('index');
Route::get('/class', [PageController::class, 'class'])->name('class');
Route::get('/class-add', [PageController::class, 'classAdd'])->name('class-add');
Route::post('/class-store', [AdminController::class, 'storeClass'])->name('class-store');
Route::post('/class-store', [AdminController::class, 'storeClass'])->name('class-store');
Route::get('/class-delete/{id}', [AdminController::class, 'deleteClass'])->name('class-delete');
Route::get('/class-edit/{id}', [PageController::class, 'classEdit'])->name('class-edit');
Route::post('/class-update/{id}', [AdminController::class, 'updateClass'])->name('class-modify');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/testimonial-add', [PageController::class, 'testimonialAdd'])->name('testimonial-add');
Route::get('/testimonial-delete/{id}', [AdminController::class, 'testimonialDelete'])->name('testimonial-delete');
Route::post('/testimonial-store', [AdminController::class, 'storeTestimonial'])->name('testimonial-store');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/login', [AuthController::class, "login"])->name('login');;
Route::post('/actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
//REGISTER
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/actionregister', [AuthController::class, 'actionregister'])->name('actionregister');
