<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="js/jquery.js"></script>
        <script src="https://kit.fontawesome.com/9aa4e74c46.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    </head>
    <body class="font-sans antialiased bg-[#F5f5f5] p-2 lg:p-6 flex min-h-screen box-border">
        {{-- <div class="min-h-screen bg-gray-100"> --}}
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}
            
            <aside class="rounded-full sm:w-20 w-1/6 max-h-[90vh] sticky top-7 bg-gradient-to-b from-[#6F7DFF] to-[#8186ADBD] flex flex-col items-center py-10">
                {{ $sidemenu }}
            </aside>

            <!-- Page Content -->
            <main class="sm:w-full w-5/6">
                {{ $slot }}
            </main>
        {{-- </div> --}}
    </body>
</html>
