<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        return view('comprador.compradorCreate', compact('users'));
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
            'Mascota' => 'required',
        ]);

        Buyer::create($request->all());
        return redirect('/comprador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $comprador)
    {
        return view('comprador.compradorShow', compact('comprador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $comprador)
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
    public function update(Request $request, Buyer $comprador)
    {
        $request->validate([
            'Nombre' => 'required',
            'Edad' => 'required',
            'Mascota' => 'required',
        ]);


        Buyer::where('id', $comprador->id)->update($request->except('_token', '_method'));

        return redirect('/comprador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $comprador)
    {
        $comprador->delete();
        return redirect('/comprador');
    }
}
