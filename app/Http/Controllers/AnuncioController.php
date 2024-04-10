<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nome = 'Roger';
        $sobrenome = 'Machado';
        //return view('index', compact('nome', 'sobrenome'));
        return compact('nome','sobrenome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form_anuncio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');
        return $dataForm;
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
