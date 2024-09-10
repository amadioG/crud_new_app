<!DOCTYPE html>
<html>
<head>
    <title>Lista de Disciplinas</title>
</head>
<body>
    <h1>Lista de Disciplinas</h1>

    <h2>Detalhes das Disciplinas</h2>
    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>
                Nome: {{ $disciplina['nome'] }}, Professor: {{ $disciplina['professor'] }}, Escola: {{ $disciplina['escola'] }}, Quantidade de Alunos: {{ $disciplina['qtd_alunos'] }}
            </li>
        @endforeach
    </ul>

    <h2>Nomes das Disciplinas</h2>
    <ul>
        @foreach ($nomesDisciplinas as $nome)
            <li>{{ $nome }}</li>
        @endforeach
    </ul>
    <a href="{{ route(name: 'disciplinas.create') }}">Cadastrar Disciplina</a>
</body>
</html>
