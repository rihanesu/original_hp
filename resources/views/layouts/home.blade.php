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
        {{-- 以下navbarのため追加 --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="header container row align-items-center mb-5 col-md-12 mx-auto">
                <div class="site-title col-md-12 text-align-center">
                    @include('parts/home-title')
                </div>
                <nav class="navbar navbar-expand-md navbar-light col-md-12 mx-auto">
                    <button class="navbar-toggler col-md-12" type="button" data-toggle="collapse" data-target="#home-navbar" aria-controls="home-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <p class="navbar-name">Menu</p>
                    </button>
                    <div class="collapse navbar-collapse col-md-12" id="home-navbar">
                        <ul class="navbar-nav col-md-12 justify-content-around">
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
                <div class="footer-title col-md-4">
                    <h2>林本ピアノ教室</h2>
                </div>
                <nav class="navbar navbar-expand-md navbar-light col-md-12 mx-auto">
                    <button class="navbar-toggler col-md-12" type="button" data-toggle="collapse" data-target="#home-navbar" aria-controls="home-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <p class="navbar-name">Menu</p>
                    </button>
                    <div class="collapse navbar-collapse col-md-12" id="home-navbar">
                        <ul class="navbar-nav col-md-12 justify-content-around">
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
        </footer>
    </body>
</html>
