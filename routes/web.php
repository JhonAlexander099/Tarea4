<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\PromocionController;

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
/*get es obtener una vista*/
/*post es para modificar*/
/*put es para actualizar*/
/*delete es para eliminar*/
/*USUARIOS*/
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.delete');

/*RECLAMOS*/
Route::get('/reclamos/create', [ReclamoController::class, 'create'])->name('reclamos.create');
Route::post('/reclamos', [ReclamoController::class, 'store'])->name('reclamos.store');

Route::get('/reclamos', [ReclamoController::class, 'index'])->name('reclamos.index');

Route::get('/reclamos/{reclamo}', [ReclamoController::class, 'show'])->name('reclamos.show');

Route::get('/reclamos/{reclamo}/edit', [ReclamoController::class, 'edit'])->name('reclamos.edit');

Route::put('/reclamos/{reclamo}', [ReclamoController::class, 'update'])->name('reclamos.update');

Route::delete('/reclamos/{reclamo}', [ReclamoController::class, 'destroy'])->name('reclamos.delete');

/*PROMOCIONES*/

Route::get('/promocions/create', [PromocionController::class, 'create'])->name('promocions.create');
Route::post('/promocions', [PromocionController::class, 'store'])->name('promocions.store');

Route::get('/promocions', [PromocionController::class, 'index'])->name('promocions.index');

Route::get('/promocions/{promocion}', [PromocionController::class, 'show'])->name('promocions.show');

Route::get('/promocions/{promocion}/edit', [PromocionController::class, 'edit'])->name('promocions.edit');

Route::put('/promocions/{promocion}', [PromocionController::class, 'update'])->name('promocions.update');

Route::delete('/promocions/{promocion}', [PromocionController::class, 'destroy'])->name('promocions.delete');

