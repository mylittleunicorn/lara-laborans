<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramStudyController;
use App\Http\Controllers\LabController;

Route::get('/', function () {
    return view('admin.dashboard.home');
})->name('dashboard.index');

Route::prefix('programstudy')->group(function () {
    Route::controller(ProgramStudyController::class)->group(function () {
        Route::get('/', 'index')->name('programstudy.index');
        Route::get('create', 'create')->name('programstudy.create');
        Route::post('/', 'store')->name('programstudy.store');
    });
});
Route::controller(LabController::class)->group(function () {
    Route::get('/lab', 'index')->name('lab.index');
    Route::get('/lab/create', 'create')->name('lab.create');
    Route::post('/lab', 'store')->name('lab.store');
});
