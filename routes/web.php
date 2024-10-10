<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\Puestos2Controller;

Route::controller(AlumnoController::class)->group(function(){
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.ver', [AlumnoController::class, 'show'])->name('alumnos.ver');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::POST('/alumnos.delete', [AlumnoController::class, 'show'])->name('alumnos.destroy');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
});
Route::get('/plazas.index', [PlazasController::class, 'index'])->name('plazas.edit');

Route::resource('puestos2s', Puestos2Controller::class);

Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::resource('ejemplos', EjemploController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
