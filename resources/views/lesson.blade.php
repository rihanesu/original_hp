@extends('layouts.base')

@section('title', 'レッスン案内')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="page-title col-md-4">レッスン案内</h1>
        <div class="classroom-information col-md-12">
            <p>愛知県江南市すいとぴあ江南から、<br class="br-sp" />徒歩１分弱の場所にあるピアノ教室です。</p>
            <p>愛知県と岐阜県の県境にありますので、<br class="br-sp" />岐阜県各務原市からも近い教室です。</p>
            <p>丹羽郡扶桑町、大口町、犬山市、一宮市<br class="br-sp" />などからも</p>
            <p>近くて通いやすい場所にある教室です。</p>
        </div>
        <div class="col-md-12">
            <dl class="col-md-6 lesson-info">
                <dt>レッスン案内</dt><dd>幼児から大人の方の個人レッスン　<br>保育士希望の方<br class="br-sp" />現在幼稚園教諭・現役の保育士の方</dd>
                <dt>レッスン日時</dt><dd>月曜日〜土曜日　８：００〜２０：３０<br class="br-sp" />（日曜日/祝日は定休日）</dd>
                <dt>レッスン時間</dt><dd>３０分（日曜日/祝日は定休日）</dd>
                <dt>レッスン回数</dt><dd>年間４１回　（発表会含む）</dd>
                <dt>発表会</dt><dd>毎年、江南市民文化会館小ホールにて<br class="br-sp" />開催</dd>
                <dt>教室設備</dt><dd>自宅敷地内別棟の防音室（待合室完備）<br class="br-sp" />で抜群の落ち着いた環境でのレッスン<br>レッスン室の隣、待合室にて電子ピアノ<br class="br-sp" />で練習が出来ます</dd>
            </dl>
        </div>
        <div class="fee col-md-12">
            <div class="headline col-md-4">
                <h2>料金</h2>
            </div>
            <div class="fee-about col-md-12">
                <p>入会金　　　３０００円</p>
                <p>（母子家庭の方は免除させて頂きます）</p>
            </div>
            <div class="class-card col-md-12">
                <div class="top-card row col-md-12">
                    <div class="card" style="width: 15rem;">
                        <div class="card-content card1">
                            <div class="card-title">
                                <h4>導入　/　初級</h4>
                            </div>
                            <img src="{{ asset('image/card1.jpg') }}" class="col-md-12 card-image">
                            <div class="card-body">
                                <p>月額　　６０００円</p>
                                <p>月１回　３０００円</p>
                                <p>※初級コースは月１回です</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-content card2">
                            <div class="card-title">
                                <h4>中級</h4>
                            </div>
                            <img src="{{ asset('image/IMG_9657.JPG') }}" class="col-md-12 card-image">
                            <div class="card-body">
                                <p>月額　　７０００円</p>
                                <p>月１回　３０００円</p>
                                <p>月２回　５０００円</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-content card3">
                            <div class="card-title">
                                <h4>上級</h4>
                            </div>
                            <img src="{{ asset('image/IMG_9657.JPG') }}" class="col-md-12 card-image">
                            <div class="card-body">
                                <p>月額　　８０００円</p>
                                <p>月１回　３０００円</p>
                                <p>月２回　５０００円</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-content card4">
                            <div class="card-title">
                                <h4>保育士コース</h4>
                            </div>
                            <img src="{{ asset('image/card4.jpg') }}" class="col-md-12 card-image">
                            <div class="card-body">
                                <p>月額　　７０００円</p>
                                <p>月１回　３０００円</p>
                                <p>月２回　５０００円</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-card-about">
                <p>大人の男性の方の入会は、ご遠慮させて<br class="br-sp" />頂いております。</p>
                <p>保育士希望の高校生や大学生の男性の方は、<br class="br-sp" />入会が可能です。</p>
            </div>
        </div>
        <div class="question col-md-12">
            <div class="headline col-md-4">
                <h2>よくある質問</h2>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question1">ピアノはすぐに必要ですか？</label>
                    <input type="checkbox" id="question1">
                    <div class="hidden_show">
                        <p>自宅での練習に必要ですので、ぜひご準備をお願いします。</p>
                        <p>できれば、タッチにより本格的な音楽性を求められるアップライトピアノの購入をお勧めしますが</p>
                        <p>住宅事情などで電子ピアノを使って練習をされている方も見えます。</p>
                        <p>アップライトピアノの中古でもお手頃な値段で購入出来ますので、ぜひご相談して見て下さい。</p>
                        <p>必要だといって慌てて購入する必要はありませんので、ご安心下さい。</p>
                    </div>
                </div>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question2">年少や年中からピアノを始めても大丈夫ですか？</label>
                    <input type="checkbox" id="question2">
                    <div class="hidden_show">
                        <p>生徒さんの中には、年少さん前から始める方も見えます。</p>
                        <p>経験豊かな指導歴で、一人一人にあった指導を致します。</p>
                        <p>年少前から始めた生徒さんで、今高校生になっても続けて見える生徒さんも見えます。</p>
                        <p>長く続けて頂けるように親切、丁寧に指導致しますので　安心して始めて下さい。</p>
                        <p>年少さんも年中さんから始められても　全力で応援させて頂きます。</p>
                    </div>
                </div>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question3">レッスンに親の付き添いは必要ですか？</label>
                    <input type="checkbox" id="question3">
                    <div class="hidden_show">
                        <p>習い始めてすぐにお母様がそばに付いていないと不安なお子様は、そばに付いて見ていて頂きたいです。</p>
                        <p>レッスンに慣れてきて一人でもレッスンが出来るとお子様が言われたら、精神的な自立も考えて</p>
                        <p>一人でレッスンが受けられるようになることも大切なことです。</p>
                        <p>お母様が近くに見えることで、お子様の視線がお母様の方ばかりにいき、レッスンに集中出来ないこともありますし</p>
                        <p>お母様が近くで、口出しをされて、レッスンに支障をきたすこともあります。</p>
                        <p>いずれは一人でレッスンを受けられるようになり、お母様は家での練習を見て頂けたらと思います。</p>
                    </div>
                </div>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question4">振り替えレッスンは出来ますか？</label>
                    <input type="checkbox" id="question4">
                    <div class="hidden_show">
                        <p>当日の急な欠席による振替レッスンは、原則お断りをさせて頂いております。</p>
                        <p>一週間その生徒さんのためだけにスケジュールを空けてお待ちしています。</p>
                        <p>スイミングスクールのように大人数の振り替えと違って　一人の生徒さんの振り替えはとても大変ですのでご了承をお願いします。</p>
                        <p>前日までの連絡があった場合のみ空き時間が合えば振り替えレッスンをさせて頂きます。</p>
                    </div>
                </div>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question5">発表会はありますか？</label>
                    <input type="checkbox" id="question5">
                    <div class="hidden_show">
                        <p>毎年、江南市民文化会館の小ホールで開催しております。</p>
                        <p>舞台で演奏するために、練習を重ね技術も精神的にも大きく成長できる姿を是非ご覧頂きたいです。</p>
                        <p>お母様との連弾もとっても素敵です。曲も自分の弾きたい曲があれば優先させて頂きます。</p>
                        <p>他の生徒さんの演奏を聴くことも、大切な勉強となりますので、是非ご参加をよろしくお願いします。</p>
                    </div>
                </div>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question6">発表会はありますか？</label>
                    <input type="checkbox" id="question6">
                    <div class="hidden_show">
                        <p>毎年、江南市民文化会館の小ホールで開催しております。</p>
                        <p>舞台で演奏するために、練習を重ね技術も精神的にも大きく成長できる姿を是非ご覧頂きたいです。</p>
                        <p>お母様との連弾もとっても素敵です。曲も自分の弾きたい曲があれば優先させて頂きます。</p>
                        <p>他の生徒さんの演奏を聴くことも、大切な勉強となりますので、是非ご参加をよろしくお願いします。</p>
                        <img src="{{ asset('image/q-image.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="question-body">
                <div class="hidden_box">
                    <label for="question7">先生は優しいですか？</label>
                    <input type="checkbox" id="question7">
                    <div class="hidden_show">
                        <p>子供が大好きですので、基本的には怒ったりはしません。</p>
                        <p>しかし基本的な挨拶が出来なかったり、あまりにも態度が悪ければ指導をさせて頂きます。。</p>
                        <p>ピアノを弾く方は、人間的にも素敵な人であってもらいたいと考えています。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
