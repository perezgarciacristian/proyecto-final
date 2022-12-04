<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{

    public function delete(Pet $pet)
    {
        $pet->archivo()->delete();
        $route = '/pet/' . str($pet->id) . '/edit';
        return redirect($route);
    }
}
