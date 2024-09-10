<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>

    <h2>Detalhes dos Alunos</h2>
    <ul>
        @foreach ($alunos as $aluno)
            <li>
                Nome: {{ $aluno['nome'] }}, Idade: {{ $aluno['idade'] }}, Email: {{ $aluno['email'] }}
            </li>
        @endforeach
    </ul>

    <h2>Nomes dos Alunos</h2>
    <ul>
        @foreach ($nomeAlunos as $nome)
            <li>{{ $nome }}</li>
        @endforeach
    </ul>
    <a href="{{ route('alunos.create') }}">Cadastrar aluno</a>
</body>
</html>
