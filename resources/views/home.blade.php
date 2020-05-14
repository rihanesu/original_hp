@extends('layouts.home')

@section('title', 'トップページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="top-slider col-md-12 mb-5">
                <li class="top-slider-item"><img src="{{ asset('image/IMG_9657.JPG') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/IMG_9659.JPG') }}"></li>
                <li class="top-slider-item"><img src="{{ asset('image/IMG_9668.JPG') }}"></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="introduction col-md-12 mb-5">
                <div class="row">
                    <img class="col-md-6" src="{{ asset('image/IMG_9668.JPG') }}">
                    <div class="col-md-6">
                        <h2>Introduction</h2>
                        <ul class="introduction-body">
                            <li class="introduction-text col-md-12">やる気をひきだし驚くほど成長できるピアノ教室です</li>
                            <li class="introduction-text col-md-12">保育士希望の方は伴奏のコツを覚えて夢が叶います</li>
                            <li class="introduction-text col-md-12">自分の弾きたいを応援し楽しく基礎力をつけ</li>
                            <li class="introduction-text col-md-12">音楽のある豊かな人生を応援します</li>
                            <li class="introduction-text col-md-12">すいとぴあ江南より徒歩１分の場所にある教室です</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="home-classroom col-md-12 mb-5">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h2>教室案内</h2>
                        <ul class="introduction-body">
                            <li class="introduction-text col-md-12">レッスン室ではカワイのRX-G1のグランドピアノ</li>
                            <li class="introduction-text col-md-12">カシオCELVIANOグランドハイブリットGP-500を</li>
                            <li class="introduction-text col-md-12">待合室にご用意しています</li>
                            <li class="introduction-text col-md-12">レッスン室にはアビテックスの防音室があり</li>
                            <li class="introduction-text col-md-12">抜群の環境で落ち着いたレッスンが行えます</li>
                        </ul>
                    </div>
                    <div class="introduction-image col-md-6">
                        <img src="{{ asset('image/IMG_9668.JPG') }}">
                    </div>
                </div>
                <a href="{{ asset('classroom') }}" class="link-border">MORE</a>
            </div>
            <div class="home-teacher col-md-12 mb-5">
                <div class="row mb-5">
                    <img class="col-md-6" src="{{ asset('image/IMG_9668.JPG') }}">
                    <div class="col-md-6">
                        <h2>講師紹介</h2>
                        <ul class="introduction-body">
                            <li class="introduction-text col-md-12">林本　麦子</li>
                            <li class="introduction-text col-md-12">名古屋芸術大学卒業</li>
                            <li class="introduction-text col-md-12">ヤマハ音楽教室個人レッスン７年担当</li>
                            <li class="introduction-text col-md-12">その後自宅にてピアノ教室を開設</li>
                            <li class="introduction-text col-md-12">指導歴２６年</li>
                        </ul>
                    </div>
                </div>
                <a href="{{ asset('teacher') }}" class="link-border">MORE</a>
            </div>
            <div class="home-classroom col-md-12 mb-5">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h2>レッスン案内</h2>
                        <ul class="introduction-body">
                            <li class="introduction-text col-md-12">林本ピアノ教室の３つのお約束</li>
                            <li class="introduction-text col-md-12">１、得意なところを伸ばします</li>
                            <li class="introduction-text col-md-12">２、分からないが分かるに変わります</li>
                            <li class="introduction-text col-md-12">３、諦めずに続ける力を育てます</li>
                            <li class="introduction-text col-md-12">抜群の環境で落ち着いたレッスンが行えます</li>
                        </ul>
                    </div>
                    <div class="introduction-image col-md-6">
                        <img src="{{ asset('image/IMG_9668.JPG') }}">
                    </div>
                </div>
                <a href="{{ asset('lesson') }}" class="link-border">MORE</a>
            </div>
            <div class="row">
                <div class="home-access col-md-4">
                    <div class="home-headline">
                        <h2>アクセス</h2>
                    </div>
                    <div class="home-access-body">
                        <p></p>
                    </div>
                    <div class="home-link">
                        <a href="" class="link-border">MORE</a>
                    </div>
                </div>
                <div class="home-blog col-md-4">
                    <div class="home-headline">
                        <h2>ブログ</h2>
                    </div>
                    <div class="home-blog-body">
                        <p>当教室のブログです</p>
                        <p>外部サイトとなります</p>
                    </div>
                    <div class="home-link">
                        <a href="" class="link-border">MORE</a>
                    </div>
                </div>
                <div class="home-contact col-md-4">
                    <div class="home-headline">
                        <h2>お問い合わせ</h2>
                    </div>
                    <div class="home-contact-body">
                        <p></p>
                    </div>
                    <div class="home-link">
                        <a href="" class="link-border">MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
