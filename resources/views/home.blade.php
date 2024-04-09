<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative dark:text-white pt-10 pb-6 px-4 min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-9">
            <livewire:components.card />
            <livewire:components.card />
            <livewire:components.card />
            <livewire:components.card />
            <livewire:components.card />
            <livewire:components.card />
            <livewire:components.card />
            <livewire:components.card />
        </div>
    </div>
</body>

</html>