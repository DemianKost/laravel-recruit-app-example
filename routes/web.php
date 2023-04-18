<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

// Guest Routes
Route::middleware('guest')->group( function() {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'authenticate']);

    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'store']);
});

// All user routes
Route::middleware('auth')->group( function() {

    // Vacancy creator routes
    Route::get('/vacancies/list', [VacanciesController::class, 'list']);
    Route::resource('/vacancies', VacanciesController::class);

    // Profile routes
    Route::post('/profile/user/update', [UserController::class, 'update']);
    Route::resource('/profile', ProfileController::class);
    Route::get('/logout', [UserController::class, 'logout']);

});