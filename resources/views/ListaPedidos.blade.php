<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        nav {
            margin-bottom: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ route('orders.index') }}">LISTA PEDIDOS</a></li>
            </ul>
        </nav>
    </div>

    <div>
        <h1>Lista de Pedidos</h1>
        <hr>

        <h2>Códigos dos Pedidos</h2>
        <ul>
            @foreach ($orderCodes as $orderCode)
                <li>{{ $orderCode }}</li>
            @endforeach
        </ul>

        <h2>Detalhes dos Pedidos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código do Pedido</th>
                    <th>Cliente</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor do Pedido</th>
                    <th>Valor do Desconto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order['id'] }}</td>
                        <td>{{ $order['cod_ped'] }}</td>
                        <td>{{ $order['cliente'] }}</td>
                        <td>{{ $order['produto'] }}</td>
                        <td>{{ $order['quant'] }}</td>
                        <td>{{ $order['valor_ped'] }}</td>
                        <td>{{ $order['valor_desc'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>