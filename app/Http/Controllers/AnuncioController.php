<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

    public function editar($id){

        $anuncio = Anuncio::find($id);
        return view('anuncio_update', compact('anuncio'));
    }

    public function apagar($id){
        $anuncio = Anuncio::find($id);
        // if($anuncio->getAttributes()['imagem'] !=NULL) // testa se tinha um nome de arquivo no banco
        //     Storage::disk('public')->delete($anuncio->getAttributes()['imagem']);
        $deletar = $anuncio->delete();
        if($deletar)
            return redirect()->route('anuncio.index')->with('success', 'Produto removido com sucesso!');
        else
             return redirect()->route('anuncio.index')->with(['erros'=> 'Falha ao remover produto']);

    }

    public function atualizar(Request $request, $id){
        $dados = $request->except('_token', 'submit');
        $anuncio = Anuncio::find($id);
        // $this->validate($request, $anuncio->rules, $anuncio->messages);
        // if ($request->hasFile('imagem'))
        //     {
        //         if($anuncio->getAttributes()['imagem'] !=NULL)
        //             Storage::disk('public')->delete($anuncio->getAttributes()['imagem']);
        //         $novoNome = $request->file('imagem')->store('imagens', 'public');
        //         $dados['imagem'] = $novoNome;
        // }
        // else
        //     unset($dados['imagem']);
        $update = $anuncio->update($dados);
        if($update)
            return redirect()->route('anuncio.index')->with('success', 'Produto atualizado com sucesso!');
        else
            return redirect()->route('anuncio.edit', $id)->with(['erros'=> 'Falha ao editar']);
    }

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
        $dados['userId'] = Auth::id();

        $insert = Anuncio::create($dados);
        if($insert)
            return redirect()->route('anuncio.index') ->with('success', 'Produto inserido com sucesso!');
        else
            return redirect()->route('anuncio.create')->with(['error'=> 'Falha ao inserir produto']);
     
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dados = $request->except('_token', 'submit');
        $anuncio = Anuncio::find($id);
        // $this->validate($request, $anuncio->rules, $anuncio->messages);
        // if ($request->hasFile('imagem'))
        //     {
        //         if($anuncio->getAttributes()['imagem'] !=NULL)
        //             Storage::disk('public')->delete($anuncio->getAttributes()['imagem']);
        //         $novoNome = $request->file('imagem')->store('imagens', 'public');
        //         $dados['imagem'] = $novoNome;
        // }
        // else
        //     unset($dados['imagem']);
        $update = $anuncio->update($dados);
        if($update)
            return redirect()->route('anuncio.index')->with('success', 'Produto atualizado com sucesso!');
        else
            return redirect()->route('anuncio.edit', $id)->with(['erros'=> 'Falha ao editar']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
