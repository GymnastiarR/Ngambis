<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://kit.fontawesome.com/9aa4e74c46.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/particle.css">
        <script src="js/jquery.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{-- min-h-screen flex flex-col justify-center items-center w-full --}}
            {{ $slot }}
        </div>
        <script src="js/particle.js"></script>
    </body>
</html>
