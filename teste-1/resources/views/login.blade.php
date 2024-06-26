<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Teste-1 </title>
</head>
<body>
    <h1> Login <h1>
    <form method="POST" action="{{ route('post.login') }}">
        @csrf
        <label for="email"> E-mail: </label>
        <input type="email" name="email" required autofocus>
        
        <label for="password"> Senha: </label>
        <input type="password" name="password" required>

        <p> Não se cadastrou? </p>
        <a href="{{ route('get.register) }}"> Clique aqui. </a>

        <button type="submit"> Entrar </button>
    </form>
</body>
</html>