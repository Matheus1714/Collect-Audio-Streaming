<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/audio.css">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    </head>
    <body>
        @yield('content')
    </body>
</html>