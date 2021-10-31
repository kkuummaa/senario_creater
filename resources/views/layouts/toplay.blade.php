<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light mt-3 mb-3" style="background-color:#FBCBED">
                <a class="navbar-brand" href="#">Senario Creater</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" >
                    <ul class="navbar-nav">
                        <li class="nav-item px-4">
                            @guest
                            <p class="nav-item">ゲスト</p>
                            @else
                            <a class="nav-link" href="#">{{ Auth::user()->profile->name }}</a>
                            @endguest
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ログアウト</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p class="copyright">(c)2021 kuma</p>
        </footer>
    </body>
    @yield('js') {{-- javascriptを読み込む --}}
</html>