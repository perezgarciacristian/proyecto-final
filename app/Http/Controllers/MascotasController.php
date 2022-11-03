<?php

namespace App\Http\Controllers;

use App\Models\mascotas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$mascotas = mascotas::all();*/
        $mascotas = Auth::user()->mascotas;
    
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
        return view('mascotas.mascotasCreate', compact('users'));
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
           'Edad'=> 'required',
           'Genero'=> 'required',
           'Animal'=> 'required',
        ]);

        /*$request->merge(['user_id'=> Auth::id()]);*/
        mascotas::create($request->all());

        return redirect('/mascotas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function show(Mascotas $mascota)
    {
        return view('mascotas.mascotasShow', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascotas $mascota)
    {
        return view('mascotas.mascotasedit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascotas $mascota)
    {
        //dd($request->all());
        $request->validate([
            'Nombre' => 'required',
            'Edad'=> 'required',
            'Genero'=> 'required',
            'Animal'=> 'required',
         ]);

         //$mascotas->Nombre = $request->Nombre;
         //$mascotas->Edad = $request->Edad;
         //$mascotas->Genero = $request->Genero;

        
         Mascotas::where('id', $mascota->id)->update($request->except('_token','_method'));

         return redirect('/mascotas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascotas $mascota)
    {
        $mascota->delete();
        return redirect('/mascotas');
    }
}
