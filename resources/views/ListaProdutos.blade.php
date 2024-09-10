<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li>HOME</li>
                <li>LISTA PRODUTOS</li>
            </ul>
        </nav>
    </div>

    <div>
        <h1>Lista de Produtos</h1>
        <hr>

        <ul>
            {{-- Aqui entra o blade PHP --}}
            @foreach ($productList as $productName)
                <li>{{ $productName }}</li>
            @endforeach
        </ul>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Quantidade em Estoque</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['valor'] }}</td>
                        <td>{{ $product['categoria'] }}</td>
                        <td>{{ $product['marca'] }}</td>
                        <td>{{ $product['qtd_estoque'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
