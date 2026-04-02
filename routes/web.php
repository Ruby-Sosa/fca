<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\CipController;

Route::get('/', [PaginaController::class,'inicio'])->name('inicio');
Route::get('/inicio', [PaginaController::class,'inicio']);
Route::get('/aspirantes', [PaginaController::class,'aspirantes'])->name('aspirantes');
Route::get('/estudiantes', [PaginaController::class,'estudiantes'])->name('estudiantes');
Route::get('/docentes', [PaginaController::class, 'docentes'])->name('docentes');
Route::get('/egresados', [PaginaController::class,'egresados'])->name('egresados');



Route::get('/acerca', [FacultadController::class, 'mostrarAcerca']);
Route::get('/cip', [CipController::class, 'index'])->name('cip');
Route::get('/directorio', [FacultadController::class, 'mostrarSlug'])->defaults('slug', 'directorio');
Route::get('/historia', [FacultadController::class, 'mostrarSlug'])->defaults('slug', 'historia');
Route::get('/matricula', [FacultadController::class, 'mostrarSlug'])->defaults('slug', 'matricula');
Route::get('/organizacion', [FacultadController::class, 'mostrarSlug'])->defaults('slug', 'organizacion');
Route::get('/plan', [FacultadController::class, 'mostrarSlug'])->defaults('slug', 'plan');