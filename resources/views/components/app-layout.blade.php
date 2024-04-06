<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contents="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CheckApp</title>
</head>
<body>

    <x-partial.navbar />
    <div>
        {{ $slot }}
    </div>

    {{ $scripts ?? ''}}
</body>
</html>