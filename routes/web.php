<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('indexrequerimiento', [App\Http\Controllers\RequerimientoController::class, 'indexrequerimiento'])->name('indexrequerimiento');

Auth::routes();

Route::resource('usuarios', App\http\Controllers\UserController::class)->names('usuarios');
Route::resource('users',App\http\Controllers\Admin\UserController::class )->only(['index','edit','update'])->names('users'); 

Route::resource('personales', App\http\Controllers\PersonalController::class)->names('personal');
Route::resource('dotaciones', App\http\Controllers\DotacioneController::class)->names('dotaciones');
Route::resource('roles', App\http\Controllers\RoleController::class)->names('roles');
Route::resource('sectores', App\http\Controllers\SectoreController::class)->names('sectores');
Route::resource('estadorequerimientos', App\http\Controllers\EstadorequerimientoController::class)->names('estadorequerimientos');
// Route::resource('personal', App\http\Controllers\RoleController::class)->names('roles');
Route::resource('requerimientos', App\http\Controllers\RequerimientoController::class)->names('requerimientos');
Route::get('requerimientopanol',[ App\http\Controllers\RequerimientoController::class,'indexpanol'])->name('requerimientopanol');
Route::get('requerimientossistema',[ App\http\Controllers\RequerimientoController::class,'indexsistemas'])->name('requerimientossistema');
Route::get('chartssistemas',[ App\http\Controllers\RequerimientoController::class,'indexcharts'])->name('chartssistemas');
Route::get('requerimientosmantenimiento', [App\http\Controllers\RequerimientoController::class, 'indexmantenimiento'])->name('requerimientosmantenimiento');


// cartelera







