<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'arsip') }} | {{ $title }} </title>

    {{-- ? head --}}
    {{ $head ?? null }}
    {{-- ? end head  --}}
</head>
<body>
    {{-- ? content --}}
    {{ $content }}
    {{-- ? end content --}}

    {{-- ?  script --}}
    {{ $script ?? null }}
    {{-- ? end script --}}
</body>
</html>
