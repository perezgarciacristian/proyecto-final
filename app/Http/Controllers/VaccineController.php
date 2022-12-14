<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
    const HOME = '/vaccine';
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

        $vaccines = Vaccine::with('user')->get();

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
            'Descripcion' => 'required',
            'Componentes' => 'required',
        ]);

        $request->merge(['user_id' => Auth::id()]);
        vaccine::create($request->all());
        return redirect(self::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccine $vaccine)
    {
        return view('vaccines.vaccinesShow', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccine $vaccine)
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
    public function update(Request $request, Vaccine $vaccine)
    {
        $this->authorize('update', $vaccine);
        $request->validate([
            'Tipo' => 'required',
            'Descripcion' => 'required',
            'Componentes' => 'required',
        ]);

        Vaccine::where('id', $vaccine->id)->update($request->except('_token', '_method'));


        return redirect(self::HOME);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccine $vaccine)
    {
        $this->authorize('delete', $vaccine);
        $vaccine->delete();

        return redirect(self::HOME);
    }
}
