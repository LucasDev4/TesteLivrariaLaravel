<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livro = Livro::orderBy('titulo')->get();
        return view("livros.index", compact('livro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livro = Livro::all();
        return view("livros.create", compact('livro'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'isbn' => 'required|unique:livros,isbn|integer',
            'ano_publicacao' => 'required|integer|before_or_equal:' . date('Y') . '-12-31',
            'quantidade' => 'required|integer|min:1'
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
