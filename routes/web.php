<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\MantenimientoController;

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
    return view('auth.login');
});

Route::resource('Equipos', EquiposController::class);
Route::resource('Mantenimiento', MantenimientoController::class);

Route::get('Mantenimientos/{Mantenimiento}', [MantenimientoController::class, 'inicio'])->name('Mantenimiento.inicio');
Route::get('Mantenimiento/{Mantenimiento}', [MantenimientoController::class, 'crear'])->name('Mantenimiento.crear');
Route::get('MantenimientoVer/{Mantenimiento}', [MantenimientoController::class, 'show'])->name('MantenimientoVer.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
