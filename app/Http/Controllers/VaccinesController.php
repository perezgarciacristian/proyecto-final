<?php

namespace App\Http\Controllers;

use App\Models\Vaccines;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VaccinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vaccines = Auth::user()->vaccines;
    
        return view('vaccines.vaccinesindex', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('vaccines.vaccinesCreate', compact('users'));
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
            'Tipo' => 'required',
            'Descripcion'=> 'required',
            'Componentes'=> 'required',
         ]);
 
         /*$request->merge(['user_id'=> Auth::id()]);*/
         vaccines::create($request->all());
 
         return redirect('/vaccines');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccines $vaccine)
    {
        return view('vaccines.vaccinesShow', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccines $vaccine)
    {
        return view('vaccines.vaccinesedit', compact('vaccine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccines $vaccine)
    {
        //dd($request->all());
        $request->validate([
            'Tipo' => 'required',
            'Descripcion'=> 'required',
            'Componentes'=> 'required',
         ]);
 
         Vaccines::where('id', $vaccine->id)->update($request->except('_token','_method'));

         return redirect('/vaccines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccines $vaccine)
    {
        $vaccine->delete();
        return redirect('/vaccines');
    }
}
