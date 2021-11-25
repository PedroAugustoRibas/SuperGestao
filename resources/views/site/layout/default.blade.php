<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">    
    </head>

    <body>
        @include('site.layout._partials.menu')
        @yield('content')
    </body>
</html>