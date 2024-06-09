<html>
    <head>
        <title>HAL SNS - @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @section('sidebar')
            カテゴリー一覧
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
