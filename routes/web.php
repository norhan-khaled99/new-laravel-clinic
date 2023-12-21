<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\DoctorController;

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
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create')->middleware('auth:sanctum');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/edit/{id}', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{id}', [PatientController::class, 'delete'])->name('patients.delete');


//route for seesion
Route::get('/sessions', [SessionController::class, 'index'])->name('sessions.index');
Route::get('/sessions/create', [SessionController::class, 'create'])->name('sessions.create')->middleware('auth:sanctum');
Route::post('/sessions', [SessionController::class, 'store'])->name('sessions.store');
Route::get('/sessions/edit/{id}', [SessionController::class, 'edit'])->name('sessions.edit');
Route::put('/sessions/{id}', [SessionController::class, 'update'])->name('sessions.update');
Route::delete('/sessions/{id}', [SessionController::class, 'delete'])->name('sessions.delete');


//ROUTES FOR EXHAMIATION
Route::get('/examination', [ExaminationController::class, 'index'])->name('examination.index');
Route::get('/exhamination/create', [ExaminationController::class, 'create'])->name('examination.create')->middleware('auth:sanctum');
Route::post('/exhamination', [ExaminationController::class, 'store'])->name('examination.store');
Route::get('/exhamination/edit/{id}', [ExaminationController::class, 'edit'])->name('examination.edit');
Route::put('/exhamination/{id}', [ExaminationController::class, 'update'])->name('examination.update');
Route::delete('/exhamination/{id}', [ExaminationController::class, 'delete'])->name('examination.delete');
Route::get('/examinations/count-in-week',[ExaminationController::class, 'countExaminationsInWeek'])->name('examinations.count_in_week');


//routes for doctors
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('/doctors/edit/{id}', [DoctorController::class, 'edit'])->name('doctors.edit');
Route::put('/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');
Route::delete('/doctors/{id}', [DoctorController::class, 'delete'])->name('doctors.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homePageAdmin', function () {
    return view('admin.homePageforAdmin');
});
