<html>
    <head>
        <title>HAL SNS - @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @section('header')
            <h1>HAL SNS</h1>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
