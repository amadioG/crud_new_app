<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Disciplina</title>
</head>
<body>
    <h1>Cadastrar Nova Disciplina</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="professor">Professor:</label>
        <input type="text" id="professor" name="professor" required>
        <br>

        <label for="escola">Escola:</label>
        <input type="text" id="escola" name="escola" required>
        <br>

        <label for="qtd_alunos">Quantidade de Alunos:</label>
        <input type="number" id="qtd_alunos" name="qtd_alunos" required min="0">
        <br>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="{{ route('disciplinas.index') }}">Voltar para a lista de disciplinas</a>
</body>
</html>
