<?php

namespace App\Http\Controllers;

use App\Models\PrateleiraLivro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrateleiraLivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $PrateleiraLivros = PrateleiraLivro::with('Livro','Prateleira')->get();
            return view('view', compact(['PrateleiraLivros'])); 
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
    public function show(PrateleiraLivro $prateleiraLivro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrateleiraLivro $prateleiraLivro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrateleiraLivro $prateleiraLivro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrateleiraLivro $prateleiraLivro)
    {
        //
    }
}
