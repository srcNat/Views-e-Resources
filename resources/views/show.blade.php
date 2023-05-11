<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuario</title>
</head>
<body>
<h1>Dados do Usuário</h1>

<p><strong>Nome:</strong> {{ $usuario->nome }}</p>
<p><strong>Email:</strong> {{ $usuario->email }}</p>
<p><strong>Senha:</strong> {{ $usuario->senha }}</p>

<a href="{{ route('usuarios.edit', $usuario->id) }}">Editar Usuário</a>
<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir Usuario</button>
</form>

</body>
</html>