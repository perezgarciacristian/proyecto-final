<?php

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

Route::get('/', function () {

    return view('welcome');
});

Route::get('/landingpage', [SitioController::class, 'landingpage']);

Route::get('/Contacto/{codigo?}', [SitioController::class, 'Crush']);

Route::post('/recibe-form-Contacto/{codigo?}', [SitioController::class, 'recibeFormContacto']);

Route::resource('/pet', PetController::class);

Route::resource('/buyer', BuyerController::class)->middleware('auth');

Route::resource('/seller', SellerController::class)->middleware('auth');

Route::resource('/vaccine', VaccineController::class)->middleware('auth');


Route::get('/landing', function () {

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
