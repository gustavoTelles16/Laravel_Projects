<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title> Teste-1 </title>
</head>
<body>
    <h1> Teste-1 </h1>
    <form method="POST" action="{{ route('post.register') }}">
        <label for="name"> Nome: </label>
        <input type="text" id="name" required autofocus class="@error('name') is-invalid @enderror">
        @error('name')
            <p> {{ $message }} </p>
        @enderror
</body>
</head>