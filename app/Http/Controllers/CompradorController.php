<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$comprador = Comprador::all();*/
        $comprador = Auth::user()->comprador;
        return view('comprador.compradorindex', compact('comprador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('comprador.compradorCreate',compact('users'));
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
            'Mascota'=> 'required',
         ]);
 
         Comprador::create($request->all());
         return redirect('/comprador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function show(Comprador $comprador)
    {
        return view('comprador.compradorShow', compact('comprador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprador $comprador)
    {
        return view('comprador.compradoredit', compact('comprador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comprador $comprador)
    {
        $request->validate([
            'Nombre' => 'required',
            'Edad'=> 'required',
            'Mascota'=> 'required',
         ]);

        
         Comprador::where('id', $comprador->id)->update($request->except('_token','_method'));

         return redirect('/comprador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprador $comprador)
    {
        $comprador->delete();
        return redirect('/comprador');
    }
}
