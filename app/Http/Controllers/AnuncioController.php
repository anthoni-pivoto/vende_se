<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Anuncio;


class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    // public function salvar(Request $request){
    //     $dados = $request->except('_token');
    //     $anuncio = new Anuncio();
    //     //$this->validate($request, $anuncio->rules, $anuncio->messages); 
        
    //     if ($request->hasFile('imagem')){ // testa se foi enviado um imagem no formulário
    //         $novoNome = $request->file('imagem')->store('imagens', 'public');
    //         $dados['imagem'] = $novoNome;
    //     }           

    //     $insert = Anuncio::create($dados);
    //     if($insert)
    //         return redirect()->route('anuncio_index') ->with('success', 'Produto inserido com sucesso!');
    //     else
    //         return redirect()->route('anuncio_create')->with(['error'=> 'Falha ao inserir produto']);
    // }

    public function index()
    {
        $anuncios = Anuncio::all();
        return view('anuncio_index', compact('anuncios'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('anuncio_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        //$anuncio = new Anuncio();
        //$this->validate($request, $anuncio->rules, $anuncio->messages); 
        
        if ($request->hasFile('imagem')){ // testa se foi enviado um imagem no formulário
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        }           

        $insert = Anuncio::create($dados);
        if($insert)
            return redirect()->route('anuncio_index') ->with('success', 'Produto inserido com sucesso!');
        else
            return redirect()->route('anuncio_create')->with(['error'=> 'Falha ao inserir produto']);
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
