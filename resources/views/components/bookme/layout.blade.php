@props(['titulo' => 'ePortfolio'])

<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo ? $titulo . ' · ' : '' }}{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('bookme/imgs/favico.PNG') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://jsdelivr.net">
    <link href="https://unpkg.com" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 antialiased">
    <x-bookme.header />

    <x-bookme.main>
        {{ $slot }}
    </x-bookme.main>

    <x-bookme.footer />

    <script src="https://unpkg.com"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>
