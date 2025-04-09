<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="@yield('css')">
    
    <title>@yield('title', 'Título Padrão')</title>
</head>
<body>
    
    {{-- Conteúdo da página --}}
    @yield('content')


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/home.js"></script>
</body>
</html>
