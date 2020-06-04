@extends('layouts.home')

@section('title', 'トップページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="top-slider col-md-12 mb-5">
                <li class="top-slider-item"><img src="{{ asset('image/1-15-01.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/2-06HP.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/1-01.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/1-06re01.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/2-03.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/IMG_9657.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/IMG_9659.jpeg') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/IMG_9668.jpeg') }}"></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="introduction col-md-12 mt-5">
                <div class="headline col-md-6">
                    <h2>Introduction</h2>
                </div>
                <div class="row">
                    <div class="introduction-image col-md-4">
                        <img src="{{ asset('image/intro-home-image.jpg') }}">
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="introduction-body">
                            <p class="introduction-text col-md-12">やる気をひきだし驚くほど成長できる<br class="br-sp" />ピアノ教室です</p>
                            <p class="introduction-text col-md-12">保育士希望の方は伴奏のコツを覚えて<br class="br-sp" />夢が叶います</p>
                            <p class="introduction-text col-md-12">自分の弾きたいを応援し楽しく<br class="br-sp" />基礎力をつけ</p>
                            <p class="introduction-text col-md-12">音楽のある豊かな人生を応援します</p>
                            <p class="introduction-text col-md-12">すいとぴあ江南より徒歩１分の場所に<br class="br-sp" />ある教室です</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-classroom col-md-12">
                <div class="headline col-md-6">
                    <h2>教室案内</h2>
                </div>
                <div class="row">
                    <div class="introduction-image col-md-4 order-md-1 offset-md-1">
                        <img src="{{ asset('image/class-home-image.jpg') }}">
                    </div>
                    <div class="col-md-6">
                        <div class="introduction-body">
                            <p class="introduction-text col-md-12">レッスン室ではカワイのRX-G1の<br class="br-sp" />グランドピアノ</p>
                            <p class="introduction-text col-md-12">カシオCELVIANOグランドハイブリット<br class="br-sp" />GP-500を</p>
                            <p class="introduction-text col-md-12">待合室にご用意しています</p>
                            <p class="introduction-text col-md-12">レッスン室にはアビテックスの<br class="br-sp" />防音室があり</p>
                            <p class="introduction-text col-md-12">抜群の環境で落ち着いたレッスンが<br class="br-sp" />行えます</p>
                        </div>
                    </div>
                </div>
                <div class="home-link">
                    <a href="{{ asset('classroom') }}" class="link-border">MORE</a>
                </div>
            </div>
            <div class="home-teacher col-md-12">
                <div class="headline col-md-6">
                    <h2>講師紹介</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('image/teacher-home.jpg') }}" class="home-image">
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="introduction-body">
                            <p class="introduction-text col-md-12">林本　麦子</p>
                            <p class="introduction-text col-md-12">名古屋芸術大学卒業</p>
                            <p class="introduction-text col-md-12">ヤマハ音楽教室個人レッスン７年担当</p>
                            <p class="introduction-text col-md-12">その後自宅にてピアノ教室を開設</p>
                            <p class="introduction-text col-md-12">指導歴２６年</p>
                        </div>
                    </div>
                </div>
                <div class="home-link">
                    <a href="{{ asset('teacher') }}" class="link-border">MORE</a>
                </div>
            </div>
            <div class="home-classroom col-md-12">
                <div class="headline col-md-6">
                    <h2>レッスン案内</h2>
                </div>
                <div class="row">
                    <div class="introduction-image col-md-4 offset-md-1 order-md-1">
                        <img src="{{ asset('image/home-lesson.jpeg') }}">
                    </div>
                    <div class="col-md-6">
                        <div class="introduction-body">
                            <p class="introduction-text col-md-12">林本ピアノ教室の３つのお約束</p>
                            <ul>
                                <li class="introduction-text col-md-12">１、得意なところを伸ばします</li>
                                <li class="introduction-text col-md-12">２、分からないが分かるに変わります</li>
                                <li class="introduction-text col-md-12">３、諦めずに続ける力を育てます</li>
                            </ul>
                            <p class="introduction-text col-md-12">抜群の環境で落ち着いたレッスンが<br class="br-sp" />行えます</p>
                        </div>
                    </div>
                </div>
                <div class="home-link">
                    <a href="{{ asset('lesson') }}" class="link-border">MORE</a>
                </div>
            </div>
            <div class="row">
                <div class="home-access col-md-4">
                    <div class="headline col-md-6">
                        <h2>アクセス</h2>
                    </div>
                    <div class="home-access-body">
                        <p>当教室のアクセスです</p>
                        <p>すいとぴあ江南から徒歩１分弱の教室です</p>
                    </div>
                    <div class="home-link">
                        <a href="{{ asset('access') }}" class="link-border">MORE</a>
                    </div>
                </div>
                <div class="home-blog col-md-4">
                    <div class="headline col-md-6">
                        <h2>ブログ</h2>
                    </div>
                    <div class="home-blog-body">
                        <p>当教室のブログです</p>
                        <p>外部サイトとなります</p>
                    </div>
                    <div class="home-link">
                        <a href="{{ asset('https://ameblo.jp/hayashimoto-piano/') }}" class="link-border">MORE</a>
                    </div>
                </div>
                <div class="home-contact col-md-4">
                    <div class="headline col-md-8">
                        <h2>お問い合わせ</h2>
                    </div>
                    <div class="home-contact-body">
                        <p>お問い合わせはこちらからどうぞ</p>
                        <p>外部サイトとなります</p>
                    </div>
                    <div class="home-link">
                        <a href="{{ asset('https://ssl.form-mailer.jp/fms/e39725dd489193') }}" class="link-border">MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
