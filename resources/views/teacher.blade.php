@extends('layouts.base')

@section('title', '講師紹介')

@section('content')
<div class="container">
    <div class="row">
        <div class="teacher-title col-md-12">
            <h1>講師紹介</h1>
        </div>
        <div class="teacher-contents col-md-12">
            <img src="{{ asset('image/teacher.jpg') }}" class="teacher-image">
            <div class="teacher-body">
                <h2>生徒指導実績</h2>
                <div class="row text-align-center">
                    <div class="teacher-body-left col-md-12">
                        <p>ヤマハコンクールYRF 努力賞受賞</p>
                        <p>グレンツェンピアノコンクール 金賞、銅賞、優秀賞、準賞受賞</p>
                    </div>
                    <div class="teacher-body-under col-md-12">
                        <p>保育士試験合格実績多数有り</p>
                        <p>調理師希望で進学された生徒有り</p>
                        <p>音大受験希望者有り</p>
                        <p>指導歴２６年の経験豊富な指導に定評がある</p>
                        <p>８年以上続けられている生徒多数</p>
                        <p>大人の生徒の方多数有り</p>
                        <p>発表会は毎年、林本麦子ピアノ教室のみの生徒で</p>
                        <p>子供さんから大人の生徒さんまで多数出演</p>
                        <p>親子連弾も毎年大盛況</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
