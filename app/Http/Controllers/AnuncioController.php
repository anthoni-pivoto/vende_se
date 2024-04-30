<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Anuncio;


class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'index','atualizar', 'apagar']);
    }

    public function editar($id){

        $anuncio = Anuncio::find($id);
        return view('anuncio_update', compact('anuncio'));
    }

    public function apagar($id){
        $anuncio = Anuncio::find($id);
        if($anuncio->getAttributes()['arquivo'] !=NULL)
            Storage::disk('public')->delete($anuncio->getAttributes()['arquivo']);
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
        if ($request->hasFile('arquivo'))
            {
                if($anuncio->getAttributes()['arquivo'] !=NULL)
                    Storage::disk('public')->delete($anuncio->getAttributes()['arquivo']);
                $novoNome = $request->file('arquivo')->store('imagens', 'public');
                $dados['arquivo'] = $novoNome;
        }
        else
            unset($dados['arquivo']);
        $update = $anuncio->update($dados);
        if($update)
            return redirect()->route('anuncio.index')->with('success', 'Produto atualizado com sucesso!');
        else
            return redirect()->route('anuncio.edit', $id)->with(['erros'=> 'Falha ao editar']);
    }

    public function index()
    {   
        $id = Auth::id();
        $anuncios = Anuncio::where('userId', $id )->paginate(2);
        return view('anuncio_index', compact('anuncios'));        
    }

    public function create()
    {   
        return view('anuncio_form');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        //$anuncio = new Anuncio();
        //$this->validate($request, $anuncio->rules, $anuncio->messages); 
        
        if ($request->hasFile('arquivo')){
            $novoNome = $request->file('arquivo')->store('imagens', 'public');
            $dados['arquivo'] = $novoNome;
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
