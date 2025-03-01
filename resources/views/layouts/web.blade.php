<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="antialiased font-sans container p-2 bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 mx-auto flex flex-col min-h-screen">
    <header class="flex-shrink-0">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </header>

    <main class="flex-1 mt-6 flex items-center justify-center">
        {{ $slot }}
    </main>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70 flex-shrink-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>


</html>


{{-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
        src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
