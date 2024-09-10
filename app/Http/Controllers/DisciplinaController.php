<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = Disciplina::all();
        $nomesDisciplinas = $disciplinas->pluck('nome');

        return view('ListaDisciplinas', [
            'disciplinas' => $disciplinas,
            'nomesDisciplinas' => $nomesDisciplinas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CreateDisciplina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome'       => 'required|string|max:255',
            'professor'  => 'required|string|max:255',
            'escola'     => 'required|string|max:255',
            'qtd_alunos' => 'required|integer|min:0',
        ]);

        Disciplina::create($validatedData);

        return redirect()->route('disciplinas.index')->with('success', 'Disciplina criada com sucesso!');
    }
}
