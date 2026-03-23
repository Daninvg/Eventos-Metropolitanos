<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$eventos = Eventos::all();
        //return view('eventos.indexEventos')->with('eventos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //usar livewire
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //livewire?
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventos $eventos)
    {
        //return view('eventos.showEventos', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eventos $eventos)
    {
        //return view('eventos.editEventos', compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eventos $eventos)
    {
        //Implementar roles de usuario <--
        /** 
         * Una vez implementado los roles de usuario retomaremos esta parte del controlador 
         */ 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eventos $eventos)
    {
        $eventos->delete();
        return redirect()->route('')->with([
            'message' => 'Evento: ', $eventos->nombre_evento, 'eliminado' 
        ]);
    }
}
