<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\VaccineController;
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


// Archivos

Route::get('/pet/imagen/eliminar/{pet}', [ArchivoController::class, 'delete']);
// Opciones
Route::resource('/pet', PetController::class);

Route::resource('/buyer', BuyerController::class);

Route::resource('/seller', SellerController::class);

Route::resource('/vaccine', VaccineController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', [SitioController::class, 'menu']);
