<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevStagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                DevStagram
            </h1>

            <nav class="flex gap-4 items-center"> <!-- Ajusté gap-2 a gap-4 -->
              <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
              <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear Cuenta</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        DevStagram - Todos los derechos reservados {{now()->year}}
    </footer>
</body>
</html>
