<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
        <link href="{{ asset('js/slick.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/slick-setting.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header container row align-items-center mb-5 mt-5 col-md-12 mx-auto">
                <div class="top-title col-md-12">
                    <h1>林本ピアノ教室</h1>
                </div>
                <nav class="header-navbar col-md-12 mx-auto align-items-center">
                    <ul class="row justify-content-around">
                        <li><a href="{{ asset('home') }}">トップページ</a></li>
                        <li><a href="{{ asset('classroom') }}">教室案内</a></li>
                        <li><a href="{{ asset('teacher') }}">講師紹介</a></li>
                        <li><a href="{{ asset('lesson') }}">レッスン案内</a></li>
                        <li><a href="{{ asset('access') }}">アクセス</a></li>
                        <li><a href="">ブログ</a></li>
                        <li><a href="{{ asset('contact') }}">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="footer container row align-items-center col-md-12 mx-auto">
                <div class="footer-title col-md-12">
                    <h2>林本ピアノ教室</h2>
                </div>
                <nav class="header-navbar col-md-12 mx-auto align-items-center">
                    <ul class="row justify-content-around">
                        <li><a href="{{ asset('home') }}">トップページ</a></li>
                        <li><a href="{{ asset('classroom') }}">教室案内</a></li>
                        <li><a href="{{ asset('teacher') }}">講師紹介</a></li>
                        <li><a href="{{ asset('lesson') }}">レッスン案内</a></li>
                        <li><a href="{{ asset('access') }}">アクセス</a></li>
                        <li><a href="">ブログ</a></li>
                        <li><a href="{{ asset('contact') }}">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>
