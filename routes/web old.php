<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return "Bievenido a la página principal.";
// });
Route::get('/', HomeController::class);

// Route::get('cursos', function(){
//     return "Bienvenido a la página Cursos.";
// });
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index'); //name() le da un nombre a la ruta

// Route::get('cursos/create', function(){
//     return "En esta página podrás crear un curso.";
// });
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}', function($curso){
//     return "Bienvenido al curso " . strtoupper($curso);
// });
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso " . strtoupper($curso) . " de la categoría " . strtoupper($categoria);
//     } else {
//         return "Bienvenido al curso " . strtoupper($curso);
//     }
// });

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit'); //ruta para listar el formulario editable

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update'); //ruta para actualizar la base de datos

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); //ruta para eliminar un curso