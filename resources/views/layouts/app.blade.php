<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

        @yield('titles')

        @include('components.favicon')

        @livewireStyles

        @vite(['resources/css/app.css'])
        
    </head>

    <body>
    

        <!-- Page Content -->
        <main class="position-relative">

            @include('components.navbar')

            <div>{{ $slot }}</div>
        </main>


        <livewire:whats-app-button />


        {{-- Footer --}}
        @include('components.footer')


        @vite(['resources/js/app.js'])

    </body>

</html>