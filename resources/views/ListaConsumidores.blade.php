<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Consumidores</title>
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
                <li><a href="{{ route('consumers.index') }}">LISTA CONSUMIDORES</a></li>
            </ul>
        </nav>
    </div>

    <div>
        <h1>Lista de Consumidores</h1>
        <hr>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Celular</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consumers as $consumer)
                    <tr>
                        <td>{{ $consumer['id'] }}</td>
                        <td>{{ $consumer['nome'] }}</td>
                        <td>{{ $consumer['cpf'] }}</td>
                        <td>{{ $consumer['rg'] }}</td>
                        <td>{{ $consumer['sexo'] }}</td>
                        <td>{{ $consumer['data_nascimento'] }}</td>
                        <td>{{ $consumer['celular'] }}</td>
                        <td>{{ $consumer['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>