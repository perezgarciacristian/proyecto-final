<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    const HOME = '/buyer';
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
        $buyers = Buyer::all();
        return view('comprador.compradorindex', compact('buyers'));
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
        $request->merge(['user_id' => Auth::id()]);
        Buyer::create($request->all());
        return redirect(self::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('comprador.compradorShow', compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        return view('comprador.compradoredit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        $this->authorize('update', $buyer);
        $request->validate([
            'Nombre' => 'required',
            'Edad' => 'required',
            'Mascota' => 'required',
        ]);
        $request->merge(['user_id' => Auth::id()]);
        Buyer::find($buyer->id)->update($request->except('_token', '_method'));
        return redirect(self::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        $this->authorize('delete', $buyer);
        $buyer->delete();
        return redirect(self::HOME);
    }
}
