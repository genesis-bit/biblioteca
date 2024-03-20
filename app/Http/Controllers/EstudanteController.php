<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Estudantes = Estudante::with('Curso')->get();
            return view('estudante', compact(['Estudantes'])); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudante $estudante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudante $estudante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudante $estudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudante $estudante)
    {
        //
    }
}
