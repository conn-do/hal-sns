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
            @guest
                <a href="{{ route('login') }}">ログイン</a>
                <a href="{{ route('register') }}">新規登録</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">ログアウト</button>
                </form>
            @endauth
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
