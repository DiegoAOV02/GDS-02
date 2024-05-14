<body>
    @vite('resources/css/app.css')
    <title>Portal - @yield('titulo')</title>
    <nav>
        <a href="/">Página principal</a>
        <a href="/alumnos">alumnos</a>
    </nav>
    <h1>@yield('titulo')</h1> <!-- yield es para llamar a todos los section de welcome.blade.php -->
    <!-- Contenido de las páginas. -->
    <h3 class="text-3xl font-bold underline">@yield('contenido')</h3>
</body>