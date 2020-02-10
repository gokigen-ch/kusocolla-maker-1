<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- TODO: フォントがXDのとおりにできてなくていけてなくて涙 #22 -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('ogp')
    @yield('preload')
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
        <footer class="bg-black text-white pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <ul class="d-flex col-md-6 justify-content-center">
                        <!-- TODO: #17 利用規約ページを作る -->
                        <li class="d-block mx-2">利用規約</li>
                        <!-- TODO: #19 プライバシーポリシーページを作る -->
                        <li class="d-block mx-2">プライバシーポリシー</li>
                        <!-- TODO: 運営団体ページを作る #18 -->
                        <li class="d-block mx-2">運営団体</li>
                    </ul>
                </div>
                <div class="row justify-content-center">
                    <ul class="d-flex col-md-6 justify-content-center">
                        <div class="col-md-6 mx-2">
                            <a href="https://www.youtube.com/channel/UCkXtt1w82POw3L42un7ixrA">
                                <img src="/logo.png" class="img-fluid" alt="ごきげんチャンネル公式" >
                            </a>
                        </div>
                        <!-- TODO: #13 フッターに白い「動くクソコラメーカー」を表示する -->
                        <div class="col-md-6 mx-2 logo">
                            <img src="/logo-kusocolla-move.png" class="img-fluid py-5 hidariue-move-logo" alt="動く">
                            <img src="/logo-kusocolla.png" class="img-fluid py-5" alt="クソコラメーカー">
                        </div>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
