<?php

use App\Http\Controllers\SitioController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\CompradorController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\VaccinesController;
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

Route::get('/', function() {

    return view('welcome');
});

Route::get('/landingpage', [SitioController::class, 'landingpage']);

Route::get('/Contacto/{codigo?}', [SitioController::class, 'Crush']);

Route::post('/recibe-form-Contacto/{codigo?}', [SitioController::class, 'recibeFormContacto']);

Route::resource('/mascotas', MascotasController::class)->middleware('auth');

Route::resource('/comprador', CompradorController::class)->middleware('auth');

Route::resource('/seller', SellerController::class)->middleware('auth');

Route::resource('/vaccines', VaccinesController::class)->middleware('auth');


Route::get('/landing', function() {

    return view('landing');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/menu', [SitioController::class, 'menu']);

Route::get('/mascotas/envia-correo/{mascotas}', [MascotasController::class, 'enviaCorreo'])->name('mascota.envia-correo');
