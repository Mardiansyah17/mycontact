<!doctype html>
<html data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex">
    @auth
        @include('components.sidebar')
    @endauth
    <div class="flex flex-col items-center w-full pt-3">
        @yield('main')
    </div>
    @vite('resources/js/script.js')
</body>

</html>
