<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>
    

    <main class="py-4">
        @yield('content')
    </main>
    @stack('modals')

    @livewireScripts
</body>
</html>
