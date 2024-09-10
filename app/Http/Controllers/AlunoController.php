<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        $nomeAlunos = $alunos->pluck('nome');

        return view('ListaAlunos', compact('alunos', 'nomeAlunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CreateAluno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome'      => 'required|string|max:255',
            'idade'     => 'required|integer|min:1',
            'sexo'      => 'required|in:Masculino,Feminino',
            'cpf'       => 'required|string|unique:alunos,cpf',
            'rg'        => 'required|string',
            'email'     => 'required|email|unique:alunos,email',
            'senha'     => 'required|string|min:6',
        ]);

        Aluno::create($validatedData);

        return redirect()->route('alunos.index')->with('success', 'Aluno criado com sucesso!');
    }
}
