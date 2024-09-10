<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumers = [
            [
                'id'             => 1,
                'nome'           => 'Ana Souza',
                'idade'           => '20',
                'cpf'            => '123.456.789-00',
                'rg'             => '12.345.678-9',
                'sexo'           => 'F',
                'email'          => 'ana.souza@example.com'
            ],
            [
                'id'             => 2,
                'nome'           => 'Carlos Silva',
                'idade'           => '20',
                'cpf'            => '987.654.321-00',
                'rg'             => '98.765.432-1',
                'sexo'           => 'M',
                'email'          => 'carlos.silva@example.com'
            ]
        ];

        return view('ListaConsumidores', compact('consumers'));
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