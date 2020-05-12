@extends('layout.base')

@section('title', 'トップページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="top-image col-md-12 align-items-center">
            <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/P1-02.JPG') }}" class="top-image1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/1-06re01.JPG') }}" class="top-image2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/1-08.JPG') }}" class="top-image3">
                    </div>
                </div>
            </div>
        </div>
        <div class="introduction col-md-12 mt-4">
            <div class="introduction-title mb-4">
                <h4>Introduction</h4>
            </div>
            <div class="introduction-body col-md-12">
                <p>やる気をひきだし驚くほど成長できるピアノ教室です。</p>
                <p>保育士希望の方は、伴奏付けと練習のコツを覚えて夢が叶います。</p>
                <p>自分の弾きたいを応援し、楽しく基礎力をつけ</p>
                <p>音楽のある豊かな人生を応援します。</p>
                <p>すいとぴあ江南より徒歩１分弱の場所にあるピアノ教室です。</p>
            </div>
            <div class="introduction-image col-md-10">
                <ul class="top-slider">
                    <li class="top-slider-item"><img src="{{ asset('image/IMG_9657.JPG') }}"></li>
                    <li class="top-slider-item"><img src="{{ asset('image/IMG_9659.JPG') }}"></li>
                    <li class="top-slider-item"><img src="{{ asset('image/IMG_9668.JPG') }}"></li>
                </ul>
            </div>
        </div>
        <div class="home-classroom col-md-12">
            <div class="home-headline">
                <h4>教室案内</h4>
            </div>
            <div class="home-classroom-body">
                <p>愛知県江南市すいとぴあ江南から徒歩１分の場所にあるピアノ教室です。</p>
                <p>愛知県と岐阜県の県境にありますので、岐阜県各務原市からも近い教室です。</p>
                <p>丹羽郡扶桑町、大口町、犬山市、一宮市からも</p>
                <p>近くて通いやすい場所にある教室です。</p>
            </div>
            <div class="home-classroom-image col-md-10">

            </div>
            <div class="home-link">
                <a href="{{ asset('classroom') }}" class="link-border">MORE</a>
            </div>
        </div>
        <div class="home-teacher col-md-12">
            <div class="home-headline">
                <h4>講師紹介</h4>
            </div>
            <div class="home-teacher-body">
                <p></p>
            </div>
            <div class="home-teacher-image">

            </div>
            <div class="home-link">
                <a href="" class="link-border">MORE</a>
            </div>
        </div>
        <div class="home-lesson col-md-12">
            <div class="home-headline">
                <h4>レッスン案内</h4>
            </div>
            <div class="home-lesson-body">
                <p>林本ピアノ教室の３つのお約束</p>
                <p>１、得意なところを伸ばします</p>
                <p>２、分からないが分かるに変わります</p>
                <p>３、諦めずに続ける力を育てます</p>
            </div>
            <div class="home-lesson-image">

            </div>
            <div class="home-link">
                <a href="" class="link-border">MORE</a>
            </div>
        </div>
        <div class="home-access col-md-4">
            <div class="home-headline">
                <h4>アクセス</h4>
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
                <h4>ブログ</h4>
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
                <h4>お問い合わせ</h4>
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


@endsection
