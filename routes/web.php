<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class); //reemplaza a las 7 rutas creadas en web.old.php
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); //si se quiere cambiar el nombre de ruta

Route::view('nosotros', 'nosotros')->name('nosotros'); //view se utiliza para mostrar contenido estático (sin interacción con la bd)

Route::get('contacto', [ContactController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactController::class, 'store'])->name('contacto.store');