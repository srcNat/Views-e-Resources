<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
<h1>Editar Usuário</h1>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{ $usuario->nome }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $usuario->email }}" required>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" value="{{ $usuario->senha }}" required>

    <button type="submit">Salvar</button>
</form>

</body>
</html>