<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [PrincialController::class, 'getIndex'])->name('home');
Route::get('/libros', [AdminController::class, 'getLibros'])->name('libros');
Route::get('/editoriales', [AdminController::class, 'getEditorial'])->name('editoriales');
Route::get('/actualizar/Editorial/{id}', [AdminController::class, 'formEditorial'])->name('formEditorial');
Route::get('/registrar/Editorial', [AdminController::class, 'regEditorial'])->name('formRegEditorial');
Route::post('/registrar/Editorial/exito', [AdminController::class, 'regExitoso'])->name('Registro_Exitoso');
Route::post('/actualizar/Editorial/exito', [AdminController::class, 'updateExitoso'])->name('Actualizacion_Exitosa');
