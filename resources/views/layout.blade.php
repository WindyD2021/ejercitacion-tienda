<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Panini')</title>
    <meta name="description" content="{{ $description ?? 'Descripción de tu página para mejorar SEO.' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- 'resources/css/style.css' --}}

</head>

<body class="font-sans antialiased bg-white ">

    {{-- Barra de navegación --}}
    @include('partials.navigation')

    {{-- Breadcrumbs --}}
    @if (isset($breadcrumbs))
        @include('components.breadcrumb') 
    @endif

    <div class="max-w-full mx-auto px-4"> <!-- Cambiado de 'container' a 'max-w-full' -->
        @yield('content')
    </div>
    

    <!-- Formulario de Suscripción -->
    <section class="bg-white shadow-md p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
            <div class="flex flex-col justify-center items-center">
                <h2 class="text-3xl font-bold text-gray-800 text-center">{{ __("Subscribe to Our Newsletter") }}</h2>
                <p class="text-gray-600 text-sm text-center mt-2">{{ __("Receive offers and news from Panini") }}</p>
                <!-- Texto adicional -->
            </div>
            <div>
                <form action="{{ route('subscribe') }}" method="POST" class="flex flex-col md:flex-row">
                    @csrf
                    <input type="text" name="full_name" placeholder="Nombre Completo"
                        class="border border-gray-300 p-3 mb-4 md:mb-0 md:mr-2 flex-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
                        required>
                    <input type="email" name="email" placeholder="Correo Electrónico"
                        class="border border-gray-300 p-3 mb-4 md:mb-0 md:mr-2 flex-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"
                        required>
                    <div class="flex items-center mb-4"> <!-- Contenedor para la opción de términos -->
                        <input type="checkbox" name="terms" id="terms" required class="mr-2">
                        <label for="terms" class="text-gray-600 text-sm">{{ __("Please accept our Terms and Conditions") }}.</label>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 text-white p-3 rounded-md hover:bg-blue-700 transition duration-200">Suscribirse</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Derechos de Autor y Redes Sociales -->
    <footer class="mt-8 border-t pt-4">
        <div class="flex space-x-4 justify-center"> <!-- Justificado al centro -->
            <a href="#" class="text-blue-500">Facebook</a>
            <a href="#" class="text-blue-500">Twitter</a>
            <a href="#" class="text-blue-500">Instagram</a>
            <a href="#" class="text-blue-500">LinkedIn</a>
        </div>
        <p class="text-sm text-center">&copy; {{ date('Y') }} {{ __("Panini Argentina store. All rights reserved") }}.</p>
    </footer>

</body>

</html>
