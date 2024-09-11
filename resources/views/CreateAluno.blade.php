<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
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

        form {
            background-color: #2c2c2c;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input, select {
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            background-color: #3a3a3a;
            color: #dcdcdc;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #9b59b6;
            color: #1a1a1a;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #8e44ad;
        }

        .success-message {
            text-align: center;
            color: #9b59b6;
            margin-bottom: 20px;
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
        <h1>Cadastrar Novo Aluno</h1>
    </header>

    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required min="1">

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>

    <div class="link-container">
        <a href="{{ route('alunos.index') }}">Voltar para a lista de alunos</a>
    </div>
</body>

</html>
