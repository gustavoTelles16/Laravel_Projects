<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title> Teste-1 </title>
</head>
<body>
    <h1> Cadastro de Usuários </h1>
    <form method="POST" action="{{ route('post.register') }}">
        <label for="name"> Nome: </label>
        <input type="text" name="name" required autofocus class="@error('name') is-invalid @enderror">
        @error('name')
            <p> {{ $message }} </p>
        @enderror
        <br>

        <label for="phone"> Telefone: </label>
        <input type="text" name="phone" required class="@error('phone') is-invalid @enderror">
        @error('phone')
            <p> {{ $message }} </p>
        @enderror
        <br>
        
        <label for="email"> E-mail: </label>
        <input type="email" name="email" required class="@error('email') is-invalid @enderror">
        @error('email')
            <p> {{ $message }} </p>
        @enderror
        <br>

        <label for="password"> Senha: </label>
        <input type="password" name="password" required class="@error('password') is-invalid @enderror">
        @error('password')
            <p> {{ $message }} </p>
        @enderror
        <br>

        <label for="password_confirmation"> Confirmação de Senha: </label>
        <input type="password" name="password_confirmation" required class="@error('password_confirmation') is-invalid @enderror">
        @error('password_confirmation')
            <p> {{ $message }} </p>
        @enderror
        <br>

        <p> Já se cadastrou? </p>
        <a href="{{ route('get.login') }}"> Acesse o Login. </a>
        <br>

        <button type="submit"> Cadastrar </button>
    </form>
</body>
</head>
