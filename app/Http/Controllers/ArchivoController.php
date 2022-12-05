<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Pet;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{

    public function delete(Pet $pet)
    {
        // $pet->archivos()->delete();
        $route = '/pet/' . str($pet->id) . '/edit';
        return redirect($route);
    }
    public function update(Request $request, Archivo $archivo)
    {
        dd($archivo->id);
        if (!empty($request->file('archivo')) && $request->file('archivo')->isValid()) {
            $ubicacion = $request->archivo->store('public');
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            dd($archivo);
        }
        $route = '/pet/' . str($request->pet_id) . '/edit';
        return redirect($route);
    }
}
