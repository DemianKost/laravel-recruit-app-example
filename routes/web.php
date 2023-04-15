<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\UserController;

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

Route::get('/', [VacanciesController::class, 'index']);
Route::get('/home', [VacanciesController::class, 'index']);
Route::resource('/vacancies', VacanciesController::class);

// Auth Routes
Route::middleware('guest')->group( function() {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'authenticate']);

    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'store']);
});