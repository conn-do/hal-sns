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
            @auth
                <div>
                    <x-profile />
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                </div>
            @endauth
            @guest
                <div>
                    <a href="{{ route('login') }}">ログイン</a>
                    <a href="{{ route('register') }}">会員登録</a>
                </div>
            @endguest
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer>
            HAL SNS
        </footer>
    </body>
</html>
