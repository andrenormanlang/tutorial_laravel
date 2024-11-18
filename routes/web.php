<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfessionalController;

Route::get('/', function () {
    return view('welcome' );
});

Route::get('/professionals', [ProfessionalController::class, 'index'])->name('professionals.index');
Route::get('/professionals/create', [ProfessionalController::class, 'create'] )->name('professionals.create');
Route::get('/professionals/{id}', [ProfessionalController::class, 'show'] )->name('professionals.show');
Route::post('/professionals', [ProfessionalController::class,'store'])->name('professionals.store');
