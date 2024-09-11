<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #dcdcdc;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #9b59b6;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        header h1 {
            color: #1a1a1a;
            margin: 0;
            font-size: 2em;
        }

        h2 {
            color: #9b59b6;
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%; /* Ajuste a largura conforme necessário */
            margin: 20px auto; /* Centraliza a tabela horizontalmente */
            border-collapse: collapse;
            background-color: #2c2c2c;
            color: #dcdcdc;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #444;
            text-align: center; /* Centraliza o texto dentro das células */
        }

        th {
            background-color: #9b59b6;
            color: #1a1a1a;
        }

        tr:hover {
            background-color: #3a3a3a;
        }

        .no-data {
            text-align: center;
            font-style: italic;
            color: #9b59b6;
            margin: 20px 0;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #9b59b6;
            font-weight: bold;
            display: inline-block;
            padding: 10px 15px;
            background-color: #2c2c2c;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #9b59b6;
            color: #1a1a1a;
        }

        .delete-btn {
            color: #9b59b6;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2em;
            transition: color 0.3s;
        }

        .delete-btn:hover {
            color: #dcdcdc;
        }
    </style>
</head>

<body>
    <header>
        <h1>Lista de Alunos</h1>
    </header>

    <h2>Detalhes dos Alunos</h2>
    @if (count($alunos) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Email</th>
                    <th>Ações</th> <!-- Coluna para o botão -->
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td><strong>{{ $aluno['nome'] }}</strong></td>
                        <td>{{ $aluno['idade'] }}</td>
                        <td>{{ $aluno['email'] }}</td>
                        <td>
                            <form action="{{ route('alunos.destroy', $aluno['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn" title="Excluir">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">Sem dados de alunos cadastrados.</p>
    @endif


    <div class="button-container">
        <a href="{{ route('alunos.create') }}">Cadastrar aluno</a>
    </div>
</body>

</html>
