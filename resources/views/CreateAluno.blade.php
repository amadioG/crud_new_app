<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Cadastrar Novo Aluno</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required min="1">
        <br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <br>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="{{ route('alunos.index') }}">Voltar para a lista de alunos</a>
</body>
</html>
