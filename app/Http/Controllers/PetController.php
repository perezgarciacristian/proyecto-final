<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Buyer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Seller;
use Illuminate\Support\Facades\Mail;

class PetController extends Controller
{
    const HOME = '/mascotas';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Auth::user()->pets;

        return view('mascotas.mascotasindex', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $compradores = Buyer::all();
        $sellers = Seller::all();
        return view('mascotas.mascotasCreate', compact('users', 'compradores', 'sellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Edad' => 'required',
            'Genero' => 'required',
            'Animal' => 'required',
        ]);

        Pet::create($request->all());
        if ($request->file('archivo')->isValid()) {
            $ubicacion = $request->archivo->store('mascota_image');
            $archivo = new Archivo();
            $archivo->task_id = $request->task_id;
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $archivo->save();
            $student = User::find(Auth::id())->userable;
            $student->tasks()->updateExistingPivot($request->task_id, [
                'fileUploaded' => $archivo->ubicacion,
            ]);
        }

        return redirect(self::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $mascota)
    {
        return view('mascotas.mascotasShow', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $mascota)
    {
        return view('mascotas.mascotasedit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $mascota)
    {
        $request->validate([
            'Nombre' => 'required',
            'Edad' => 'required',
            'Genero' => 'required',
            'Animal' => 'required',
        ]);

        Pet::where('id', $mascota->id)->update($request->except('_token', '_method'));

        return redirect(self::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $mascota)
    {
        $mascota->delete();
        return redirect(self::HOME);
    }
}
