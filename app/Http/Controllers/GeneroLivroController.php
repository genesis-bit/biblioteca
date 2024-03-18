<?php

namespace App\Http\Controllers;

use App\Models\GeneroLivro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneroLivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $Genero = GeneroLivro::all();
            return view('view', compact(['Genero'])); 
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
        try{
            if($request->id == null){
                GeneroLivro::create([
                    'descricao' => $request['descricao']
                ]); 
            }
            else{
                $GeneroLivro = GeneroLivro::findOrFail($request->id);
                $GeneroLivro->descricao = $request->descricao;
                $GeneroLivro->save();
            }          
            return redirect()->back();            
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneroLivro $generoLivro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneroLivro $generoLivro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneroLivro $generoLivro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        try{
            $GeneroLivro = GeneroLivro::findOrFail($id);
            $GeneroLivro->delete(); 
            return redirect()->back();
        }catch(Exception $e){
            return response()->json($e->getMessage(), 400); 
        }
    }
}
