<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        // Dados falsos de pedidos
        $orders = [
            [
                'id'             => 1,
                'cod_ped'        => 'PED123',
                'cliente'        => 'Ana Souza',
                'produto'        => 'Camisa',
                'quant'          => 2,
                'valor_ped'      => 66.60,
                'valor_desc'     => 60.00
            ],
            [
                'id'             => 2,
                'cod_ped'        => 'PED124',
                'cliente'        => 'Carlos Silva',
                'produto'        => 'Bermuda',
                'quant'          => 1,
                'valor_ped'      => 55.30,
                'valor_desc'     => 50.00
            ]
        ];

        // Extrair códigos dos pedidos
        $orderCodes = array_column($orders, 'cod_ped');

        return view('ListaPedidos', compact('orders', 'orderCodes'));
    }

    /**
     * Show the form for creating a new order.
     */
    public function create()
    {
        return view('CreateOrder');
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(Request $request)
    {
        // Lógica para armazenar o pedido
    }

    /**
     * Display the specified order.
     */
    public function show(string $id)
    {
        // Lógica para exibir um pedido específico
    }

    /**
     * Show the form for editing the specified order.
     */
    public function edit(string $id)
    {
        // Lógica para mostrar o formulário de edição de um pedido
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, string $id)
    {
        // Lógica para atualizar um pedido
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy(string $id)
    {
        // Lógica para excluir um pedido
    }
}
