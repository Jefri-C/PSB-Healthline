<?php

use App\Http\Controllers\SpecialityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;

#Login
Route::get('/', [AuthController::class, 'view'])->name('login');
Route::post('/', [AuthController::class, 'register'])->name('postregister');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

#View
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard');

    Route::group([
        'prefix' => 'specialities'
    ], function () {
        Route::get('', [SpecialityController::class, 'view'])->name('specialities');
        Route::put('{id}s', [SpecialityController::class, 'edit'])->name('specialities.edit');
        Route::delete('{id}', [SpecialityController::class, 'delete'])->name('specialities.delete');
    });

    Route::group([
        'prefix' => 'patient'
    ], function () {});


    Route::group([
        'prefix' => 'patient'
    ], function () {});


    Route::get('/patient', [PatientController::class, 'view'])->name('patients');
    Route::get('/appointment', [AppointmentController::class, 'view'])->name('appointments');
    Route::get('/lab', [LabController::class, 'view'])->name('lab');
    Route::get('/doctor', [DoctorController::class, 'view'])->name('doctor');
});


