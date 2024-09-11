<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
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
            text-align: center;
            color: #9b59b6;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #2c2c2c;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .no-data {
            text-align: center;
            font-style: italic;
            color: #9b59b6;
            margin: 20px 0;
        }

        .link-container {
            text-align: center;
            margin-top: 20px;
        }

        .link-container a {
            text-decoration: none;
            color: #9b59b6;
            font-weight: bold;
            padding: 10px 15px;
            background-color: #2c2c2c;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .link-container a:hover {
            background-color: #9b59b6;
            color: #1a1a1a;
        }
    </style>
</head>

<body>
    <header>
        <h1>Lista de Disciplinas</h1>
    </header>

    <h2>Detalhes das Disciplinas</h2>
    <ul>
        @if(count($disciplinas) > 0)
            @foreach ($disciplinas as $disciplina)
                <li>
                    Nome: {{ $disciplina['nome'] }}, Professor: {{ $disciplina['professor'] }}, Escola: {{ $disciplina['escola'] }}, Quantidade de Alunos: {{ $disciplina['qtd_alunos'] }}
                </li>
            @endforeach
        @else
            <p class="no-data">Nenhuma disciplina cadastrada</p>
        @endif
    </ul>

    <h2>Nomes das Disciplinas</h2>
    <ul>
        @if(count($nomesDisciplinas) > 0)
            @foreach ($nomesDisciplinas as $nome)
                <li>{{ $nome }}</li>
            @endforeach
        @else
            <p class="no-data">Nenhuma disciplina cadastrada</p>
        @endif
    </ul>

    <div class="link-container">
        <a href="{{ route('disciplinas.create') }}">Cadastrar Disciplina</a>
    </div>
</body>

</html>
