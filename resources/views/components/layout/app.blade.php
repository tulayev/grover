<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Grover</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.1/dist/js/uikit.min.js" defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" defer></script>
    <script src="{{ asset('assets/js/script.js') }}" defer></script>
</head>
<body>
    <x-layout.header />

    {{ $slot }}

    <x-layout.contact />
    
    <x-layout.footer />
</body>
</html>
