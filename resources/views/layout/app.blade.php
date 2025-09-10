<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'GestãoEmpresarial'}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body class="bg-light">
    @include('partials.navbar')
    
    <main class="container my-5">
        @yield('content') 
    </main>

    @include('partials.footer')
</body>
</html>