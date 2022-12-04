<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pet;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Vaccine;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pet', function()
{
    return Pet::all();
});

Route::get('/buyer', function()
{
    return Buyer::all();
});

Route::get('/seller', function()
{
    return Seller::all();
});

Route::get('/vaccine', function()
{
    return Vaccine::all();
});