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
    Route::get('/programstudy', 'index')->name('programstudy.index');
    Route::get('/programstudy/create', 'create')->name('programstudy.create');
    Route::post('/programstudy', 'store')->name('programstudy.store');
});
