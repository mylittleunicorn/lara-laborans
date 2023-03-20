<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramStudyController;
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

Route::controller(ProgramStudyController::class)->group(function () {
    Route::get('/programstudy', 'index');
    Route::get('/programstudy/{id}', 'show');
    Route::post('/orders', 'store');
});
