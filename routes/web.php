<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('countries', \App\Http\Controllers\Admin\CountryController::class);
    Route::resource('cities', \App\Http\Controllers\Admin\CityController::class);
    Route::resource('doctors', \App\Http\Controllers\Admin\DoctorController::class);
    Route::resource('managers', \App\Http\Controllers\Admin\ManagerController::class);
    Route::resource('clinics', \App\Http\Controllers\Admin\ClinicController::class);
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    Route::resource('user-roles', \App\Http\Controllers\Admin\UserRoleController::class);
    Route::resource('bad-habits', \App\Http\Controllers\Admin\BadHabitController::class);
    Route::resource('lifestyles', \App\Http\Controllers\Admin\LifestyleController::class);
    Route::resource('user-schedules', \App\Http\Controllers\Admin\UserScheduleController::class);
    Route::resource('doctor-specializations', \App\Http\Controllers\Admin\DoctorSpecialization::class);
});
