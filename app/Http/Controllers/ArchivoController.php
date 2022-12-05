<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Pet;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{

    public function delete(Archivo $archivo)
    {
        $route = '/pet/' . str($archivo->pet_id) . '/edit';
        $archivo->delete();
        return redirect($route);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        if (!empty($request->file('archivo')) && $request->file('archivo')->isValid()) {
            $ubicacion = $request->archivo->store('public');
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $archivo->update();
        }
        $route = '/pet/' . str($request->pet_id) . '/edit';
        return redirect($route);
    }
}
