<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class,'inicio'])->name('inicio');
Route::get('/inicio', [PaginaController::class,'inicio']);

Route::get('/aspirantes', [PaginaController::class,'aspirantes'])->name('aspirantes');
Route::get('/estudiantes', [PaginaController::class,'estudiantes'])->name('estudiantes');
Route::get('/docentes', [PaginaController::class,'docentes'])->name('docentes');
Route::get('/egresados', [PaginaController::class,'egresados'])->name('egresados');