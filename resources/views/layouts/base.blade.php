<html>
    <head>
        <title>HAL SNS - @yield('title')</title>
        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])
    </head>
    <body class="prose">
        <header>
            @section('header')
                <h1>HAL SNS</h1>
            @show
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer>
            HAL SNS
        </footer>
    </body>
</html>
