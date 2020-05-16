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
                    @include('parts/base-title')
                </div>
                <nav class="navbar navbar-expand-md navbar-light col-md-12 mx-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-around" id="responsiveMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">トップページ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('classroom') }}">教室案内</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('teacher') }}">講師紹介</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('lesson') }}">レッスン案内</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('access') }}">アクセス</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('https://ameblo.jp/hayashimoto-piano/') }}">ブログ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ asset('https://ssl.form-mailer.jp/fms/e39725dd489193') }}">お問い合わせ</a></li>
                        </ul>
                    </div>
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
                <nav class="navbar navbar-expand-md navbar-light col-md-12 mx-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('/') }}">トップページ</a></li>
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('classroom') }}">教室案内</a></li>
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('teacher') }}">講師紹介</a></li>
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('lesson') }}">レッスン案内</a></li>
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('access') }}">アクセス</a></li>
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('https://ameblo.jp/hayashimoto-piano/') }}">ブログ</a></li>
                            <li class="nav-item-home"><a class="nav-link" href="{{ asset('https://ssl.form-mailer.jp/fms/e39725dd489193') }}">お問い合わせ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </footer>
    </body>
</html>
