<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitucionesController;
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
    return view('inicio');
});
Route::get('consulta', function () {
    return view('welcome');
});
Route::get('barrios/{id}', [InstitucionesController::class, 'barrios'])->name('barrios');
Route::get('detalle/{id}', [InstitucionesController::class, 'detalle'])->name('detalle');
Route::post('consultar', [InstitucionesController::class, 'consultar'])->name('consultar');
Route::get('/instituciones', [InstitucionesController::class, 'instituciones'])->name('instituciones');
Route::get('/institucionesData', [InstitucionesController::class, 'institucionesData'])->name('institucionesData');
Route::get('/cupos/{id}', [InstitucionesController::class, 'cupos'])->name('cupos');