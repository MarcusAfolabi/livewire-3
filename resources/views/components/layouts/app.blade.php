<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> 

    @livewireStyles
    @vite(['resources/css/app.css']) 


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Livewire' }}</title>
</head>

<body>
    {{ $slot }}

    @livewireScripts

</body>

</html>