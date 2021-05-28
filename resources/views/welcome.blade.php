<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Set the title for the application -->
    <title>{{ config('app.name', 'A project needs a name') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
</head>

<body class="grid place-items-center h-screen">
    <button class="px-4 py-2 rounded bg-gray-800 hover:bg-gray-900 text-white text-xs">TailwindCSS is cool!</button>
</body>

</html>
