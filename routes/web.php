<?php

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


Route::get('patients', [App\Http\Controllers\PatientController::class, 'index']);
Route::get('patients/create', [App\Http\Controllers\PatientController::class, 'create']);
Route::post('patients/create', [App\Http\Controllers\PatientController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});
