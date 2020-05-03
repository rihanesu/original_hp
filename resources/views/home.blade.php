@extends('layout.base')

@section('title', 'トップページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="top-image">
            <img src="{{ asset('image/P1-02.JPG') }}" class="top-image1">
        </div>
        <div class="introduction col-md-12 mt-4">
            <div class="introduction-title mb-4">
                <h4>Introduction</h4>
            </div>
            <div class="introduction-body">
                <p>やる気をひきだし、驚くほど成長できるピアノ教室です。</p>
                <p>保育士希望の方は、伴奏付けと練習のコツを覚えて夢が叶います。</p>
                <p>自分の弾きたいを応援し、楽しく基礎力をつけ音楽のある豊かな人生を応援します。</p>
                <p>すいとぴあ江南より徒歩１分弱の場所にあるピアノ教室です。</p>
            </div>
            <div class="introduction-image">
                <ul class="top-slider">
                    <li class="top-slider-item"><img src="{{ asset('image/coffee2.png') }}"></li>
                    <li class="top-slider-item"><img src="{{ asset('image/coffee3.jpeg') }}"></li>
                </ul>
            </div>
        </div>
        <div class="home-classroom">
            <div class="home-classroom-title">
                <h4>教室案内</h4>
            </div>
            <div class="home-classroom-body">
                <p></p>
            </div>
            <div class="home-classroom-image">

            </div>
            <div class="home-link">
                <a href="">MORE</a>
            </div>
        </div>
        <div class="home-teacher">
            <div class="home-teacher-title">
                <h4>講師紹介</h4>
            </div>
            <div class="home-teacher-body">
                <p></p>
            </div>
            <div class="home-teacher-image">

            </div>
            <div class="home-link">
                <a href="">MORE</a>
            </div>
        </div>
        <div class="home-lesson">
            <div class="home-lesson-title">
                <h4>レッスン案内</h4>
            </div>
            <div class="home-lesson-body">
                <p></p>
            </div>
            <div class="home-lesson-image">

            </div>
            <div class="home-link">
                <a href="">MORE</a>
            </div>
        </div>
        <div class="home-under-content row">
            <div class="home-access">
                <div class="home-access-title">
                    <h4>アクセス</h4>
                </div>
                <div class="home-access-body">
                    <p></p>
                </div>
                <div class="home-link">
                    <a href="">MORE</a>
                </div>
            </div>
            <div class="home-blog">
                <div class="home-blog-title">
                    <h4>ブログ</h4>
                </div>
                <div class="home-blog-body">
                    <p></p>
                </div>
                <div class="home-link">
                    <a href="">MORE</a>
                </div>
            </div>
            <div class="home-contact">
                <div class="home-contact-title">
                    <h4>お問い合わせ</h4>
                </div>
                <div class="home-contact-body">
                    <p></p>
                </div>
                <div class="home-link">
                    <a href="">MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
