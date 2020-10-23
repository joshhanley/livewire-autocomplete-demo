<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Livewire Playground' }}</title>

    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        [x-cloak] {
            display: none;
        }

    </style>
    @stack('styles')
    <livewire:styles />

    @env('local')
    <script>
        window.addEventListener("livewire-debug", e => console.log(e.detail));

    </script>
    @endenv

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="antialiased">
    {{ $slot }}

    <livewire:scripts />
    @stack('scripts')
</body>

</html>
