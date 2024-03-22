<?php

namespace App\Http\Controllers;

use App\Models\PrateleiraLivro;
use App\Models\Prateleira;
use App\Models\Livro;
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
            $Livros = Livro::all();
            $Prateleiras = Prateleira::with('Livros')->get();
            $PrateleiraLivros = PrateleiraLivro::with('Livro','Prateleira')->get();
            return view('PrateleiraLivro', compact(['PrateleiraLivros','Livros','Prateleiras'])); 
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
    public function in()
    {
        try{
           // $Prateleiras = Prateleira::all();
            $Lista = [];
            $Lista::add(['name' => 'Desk']);
            $Lista::add(['namea' => 'Defffsk']);
            return $Lista;
            foreach($Prateleiras as $P){

            }
            $PrateleiraLivros = PrateleiraLivro::with('Livro','Prateleira')->get();
            return view('PrateleiraLivro', compact(['PrateleiraLivros','Livros','Prateleiras'])); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }
    }

    /**
     * Store a newly created resource in storage.     
     */
    public function store(Request $request)
    {
        try{
          
            if($request->id == null){ 
                PrateleiraLivro::create([
                    'livro_id' => $request['livro'],
                    'prateleira_id' => $request['prateleira'],
                    'posicao' => $request['posicao'],
                    'quantidade_livro' => $request['quantidade'],            
                ]); 
            }
            else{
                $Livro = PrateleiraLivro::findOrFail($request->id);
               
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
