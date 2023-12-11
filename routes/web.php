<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\PatientController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Test;
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

//all routes for patient
// Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
// Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create')->middleware('auth');
// Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
// Route::get('/patients/edit/{id}', [PatientController::class, 'edit'])->name('patients.edit');
// Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patients.update');
// Route::delete('/patients/{id}', [PatientController::class, 'delete'])->name('patients.delete');
// Route::get('/patients/search', [PatientController::class, 'search'])->name('patients.search');


//route for seesion
Route::get('/sessions', [SessionController::class, 'index'])->name('sessions.index');
Route::get('/sessions/create', [SessionController::class, 'create'])->name('sessions.create')->middleware('auth');
Route::post('/sessions', [SessionController::class, 'store'])->name('sessions.store');
Route::get('/sessions/edit/{id}', [SessionController::class, 'edit'])->name('sessions.edit');
Route::put('/sessions/{id}', [SessionController::class, 'update'])->name('sessions.update');
Route::delete('/sessions/{id}', [SessionController::class, 'delete'])->name('sessions.delete');
//


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
