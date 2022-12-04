<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Seller;

class PetController extends Controller
{

    const HOME = '/pet';

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all();

        return view('pet.petIndex', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $buyers = Buyer::all();
        $sellers = Seller::all();
        return view('pet.petCreate', compact('users', 'buyers', 'sellers'));
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
            'archivo' => 'sometimes|image'
        ]);

        $pet = Pet::create($request->all());
        if (!empty($request->file('archivo')) && $request->file('archivo')->isValid()) {
            $ubicacion = $request->archivo->store('public');
            $archivo = new Archivo();
            $archivo->pet_id = $request->pet_id;
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $pet->archivo()->save($archivo);
        }

        return redirect(self::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('pet.petShow', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        return view('pet.petEdit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'Nombre' => 'required',
            'Edad' => 'required',
            'Genero' => 'required',
            'Animal' => 'required',
            'archivo' => 'sometimes|image',
            'eliminar' => 'sometimes|string'
        ]);
        $request->merge(['pet_id' => $pet->id]);
        Pet::find($pet->id)->update($request->except('_token', '_method', 'eliminar', 'archivo'));
        if (!empty($request->file('archivo')) && $request->file('archivo')->isValid()) {
            $ubicacion = $request->archivo->store('public');
            $archivo = new Archivo();
            $archivo->pet_id = $request->pet_id;
            $archivo->ubicacion = $ubicacion;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $pet->archivo()->delete();
            $pet->archivo()->save($archivo);
        }
        return redirect(self::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect(self::HOME);
    }
}
