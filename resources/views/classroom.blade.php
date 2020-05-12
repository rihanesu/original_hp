@extends('layout.base')

@section('title', '教室案内')

@section('content')
<div class="container">
    <div class="row">
        <div class="classroom-title col-md-12">
            <h3>教室案内</h3>
        </div>
        <div class="classroom-information col-md-12">
            <p>愛知県江南市　すいとぴあ江南から　徒歩１分弱の場所にあるピアノ教室です。</p>
            <p>愛知県と岐阜県の県境にありますので、岐阜県各務原市からも近い教室です。</p>
            <p>丹羽郡扶桑町、大口町、犬山市、一宮市からも</p>
            <p>近くて通いやすい場所にある教室です。</p>
        </div>
        <div class="classroom-contents row col-md-12 mx-auto text-align-center">
            <p class="classroom-headline col-md-6">レッスン案内</p>
            <p class="classroom-body col-md-5">幼児から大人の方の個人レッスン<br>保育士希望の方・現在幼稚園教諭、現役の保育士の方</p>
            <p class="classroom-headline col-md-6">レッスン日時</p>
            <p class="classroom-body col-md-5">月曜日〜土曜日　８：００　〜　２０：３０　<br>（日曜日/祝日は定休日）</p>
            <p class="classroom-headline col-md-6">レッスン時間</p>
            <p class="classroom-body col-md-5">３０分</p>
            <p class="classroom-headline col-md-6">レッスン回数</p>
            <p class="classroom-body col-md-5">年間４１回　（発表会含む）</p>
            <p class="classroom-headline col-md-6">発表会</p>
            <p class="classroom-body col-md-5">毎年　江南市民文化会館　小ホールにて開催</p>
            <p class="classroom-headline col-md-6">教室設備</p>
            <p class="classroom-body col-md-5">自宅敷地内別棟の防音室（待合室完備）で抜群の落ち着いた環境でのレッスン<br>レッスン室の隣、待合室にて電子ピアノで練習が出来ます</p>
            <p class="classroom-headline col-md-6">駐車場</p>
            <p class="classroom-body col-md-5">４台完備</p>
        </div>
        <div class="fee col-md-12">
            <div class="fee-title">
                <h3>料金</h3>
            </div>
            <div class="fee-about col-md-12">
                <p>入会金　　　３０００円</p>
                <p>（母子家庭の方は免除させて頂きます）</p>
            </div>
            <div class="class-card row col-md-12">
                <section class="card col-md-3">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>導入　/　初級</h4>
                        </div>
                        <div class="card-body">
                            <p>月額　　６０００円</p>
                            <p>月１回　３０００円</p>
                        </div>
                        <div class="card-under">
                            <p>説明入れます</p>
                            <p>説明入れます</p>
                        </div>
                    </div>
                </section>
                <section class="card col-md-3">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>中級</h4>
                        </div>
                        <div class="card-body">
                            <p>月額　　７０００円</p>
                            <p>月１回　３０００円</p>
                            <p>月２回　５０００円</p>
                        </div>
                        <div class="card-under">
                            <p>説明入れます</p>
                            <p>説明入れます</p>
                        </div>
                    </div>
                </section>
                <section class="card col-md-3">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>上級</h4>
                        </div>
                        <div class="card-body">
                            <p>月額　　８０００円</p>
                            <p>月１回　３０００円</p>
                            <p>月２回　５０００円</p>
                        </div>
                        <div class="card-under">
                            <p>説明入れます</p>
                            <p>説明入れます</p>
                        </div>
                    </div>
                </section>
                <section class="card col-md-3">
                    <div class="card-content">
                        <div class="card-title">
                            <h4>保育士コース</h4>
                        </div>
                        <div class="card-body">
                            <p>月額　　７０００円</p>
                            <p>月１回　３０００円</p>
                            <p>月２回　５０００円</p>
                        </div>
                        <div class="card-under">
                            <p>説明入れます</p>
                            <p>説明入れます</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="class-card-about">
                <p>大人の男性の方の入会は、ご遠慮させて頂いております。</p>
                <p>保育士希望の高校生や大学生の男性の方は、入会が可能です。</p>
            </div>
        </div>
        <div class="question col-md-12">
            <div class="question-title">
                <h3>よくある質問</h3>
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
        <div class="philosophy">
            <div class="philosophy-title">
                <h3>教室理念</h3>
            </div>
            <div class="philosophy-body">
                <p>私は、音大卒業後からヤマハ音楽教室で７年ピアノ個人レッスンをしてきました。</p>
                <p>この７年間で小さなお子様の指導にあたり教育の楽しさを感じました。</p>
                <p>始めて　初めてピアノを習うお子様は、何も知らない真っ白なキャンバスです。</p>
                <p>そのお子様が少しずつ色をつけていくように　音楽の楽しさを伝えていくことが大切だと感じました。</p>
                <p>ただピアノの前に座って弾かせているだけでは、すぐに飽きてしまいます。</p>
                <p>いかに楽しくレッスンの時間を充実させるかに気を遣います。</p>
                <p>小さなお子様のレッスンには、ソルフェージュといって音楽の基礎を勉強します。</p>
                <p>ソルフェージュとは、リズム打ちをしたり、音読みをしたり読んだ音を音程をつけて歌ったりと</p>
                <p>絶対音感の基礎になる訓練もします。</p>
                <p>お子様は、真っ白なキャンバスですから知らないことを　知る楽しさに変えてグングン吸収していきます。</p>
                <p>その後小学生では、私がピアノを弾くとノートにリズムも音も正確に書けるようになります。</p>
                <p>いわゆる聴音というものです。</p>
                <p>お子様は、この聴音が大好きで、皆がもっとやりたいと言います。出来ることが楽しさに変わっていった証拠です。</p>
                <p>小学生も高学年になるとピアノの発表会では素晴らしい演奏ができるようになります。</p>
                <p>学校の伴奏の代表にも選ばれて益々自信をつけていきます。</p>
                <p>卒業式の伴奏の代表に選ばれたり、学習発表会の伴奏に選ばれたりとピアノを習っていて本当に良かったと皆さん言っています。</p>
                <p>中学生になると合唱コンクールの伴奏に選ばれて市民会館大ホールでの演奏ができてやりがいもあり、音楽的表現が発揮できる</p>
                <p>絶好の機会となります。</p>
                <p>今大人の方もレッスンに多く通ってみえます。</p>
                <p>主婦の方、お仕事をお持ちの方など忙しい中、生きがいとやりがい、癒やしを求めてレッスンに通ってみえます。</p>
                <p>大人の方が発表会に出演されると会場からも、ひときわ大きな拍手に包まれ</p>
                <p>皆様照れくさいような表情をしながらも、とても嬉しそうです。そして「また出演したい」と言われます。</p>
                <p>これからピアノを始めたい方も、ぜひこの音楽の扉を開いてみませんか？</p>
                <p>必ず始めて良かったと思えることでしょう。</p>
                <p>１人レッスンの良さは、一人一人と真剣に向き合えることではないでしょうか？</p>
                <p>グループレッスンですと、どうしても年間カリキュラムに添って進めなくてはいけません。</p>
                <p>出来ても出来なくても、分かっても分かっていなくてもどんどん進んでいきます。</p>
                <p>個人レッスンは、出来ていることをしっかりと確認しながら進んでいきます。</p>
                <p>途中で分からなくなった時は、少し戻って復習をしながら進んでいきます。</p>
                <p>ピアノ個人レッスンですと、お母様から子育ての相談をされることも多いです。</p>
                <p>私も３人の子供の母親です。子育てで悩んだりして子供を育ててきましたので多少なりの子育て経験からお母様に</p>
                <p>アドバイスをすることもあります。</p>
                <p>話をしていると子育てで悩んでいるお母様が、ふっと顔が明るくなり帰られる頃には素敵な笑顔で帰っていかれます。</p>
                <p>大人の方で「性格的に他の方と話すのが苦手です」と言われる方も見えて</p>
                <p>私が「私もそうですよ」と話していると話が弾み、その後レッスンもどんどん進んでいきます。</p>
                <p>ピアノレッスンは、ただピアノを弾くだけではなく、相手への思いやりや信頼関係がないと前に進めないなと感じます。</p>
                <p>人と人との深いつながりがあってこそレッスンも　はかどります。</p>
                <p>そこは、２６年の実績がありますのでどこが弱点か、どこを伸ばしていけば良いか、こういう話し方の方が分かりやすいのか</p>
                <p>今までの経験を基に進めていきますので、お任せして頂きたいです。</p>
                <p>ピアノを始めるにあたっては、心配なことも多いでしょう。</p>
                <p>でも初めは誰もピアノは弾けません。出来なくて当たり前です。</p>
                <p>しかし他の人と比べることは良くありません。</p>
                <p>半年後、一年後の自分と比べて下さい。必ず成長が確認出来るはずです。</p>
                <p>そして発表会で自分の演奏を披露出来たらそれはとても素敵なことです。</p>
                <p>一人だけで弾いているのも勿論素敵なことです。</p>
                <p>しかし発表会は、演奏と同時に自分というものが表現できる絶好の機会です。</p>
                <p>人前で弾くことがどれだけ人を成長させるのでしょうか。</p>
                <p>発表会１回出演するのは、100回分のレッスンに匹敵すると言われます。</p>
                <p>生徒がこの曲を弾きたいと言って難しい曲を持ってきた時、私は心の中でちょっと無理かな？と思っていても</p>
                <p>必ずやり遂げます。素晴らしく上手に弾けるようになります。</p>
                <p>どこからこんなパワーが出てくるのかと思います。</p>
                <p>弾きたい気持ちがどんなことでも乗り越える強い気持ちに変わるからでしょう。</p>
                <p>どんなことも出来ることに変えてしまうパワーがある発表会だからです。</p>
                <p>本当に発表会は魔法ですね。</p>
                <p>発表会で、生徒の曲を一曲一曲聴いるとその人の人生が見えてきます。</p>
                <p>この曲にかける想いというのか・・・そういうものが伝わってきます。</p>
                <p>発表会では、始めは弾けなくてとても苦しんでいたのに、立派に何事もなかったかのように舞台で弾く姿を見ていますと</p>
                <p>今までの事が走馬灯のように蘇り私も胸がいっぱいになります。</p>
                <p>このように皆様と音楽を通して出会えることに大変感謝をしています。</p>
                <p>一人一人の音楽に向き合う真剣な気持ちに応えられるように、これからも指導していきたいと心に誓っています。</p>
            </div>
        </div>
        <div class="student col-md-12">
            <div class="student-title">
                <h3>生徒の声</h3>
            </div>
            <div class="student-body">
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>２歳から始めて、その頃はあまり弾けなかったけれど。２年生になった今は、上手にひけるようになって良かったです。</p>
                    <p>ピアノは習い事の中で、一番楽しいと思いました。</p>
                    <p>色々な曲が弾けるようになって、良かったです。</p>
                    <p>ピアノに行くと楽しくなります。（小学２年生）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>丁寧に優しく指導して頂き、私にぴったりのピアノ教室です。</p>
                    <p>３０年ぶりの発表会では、大変緊張してしまいましたし、もっと上手になりたいと思いました。</p>
                    <p>今年の発表会も心待ちにしています。（大人の生徒さん）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>４際の頃から習っていて、今年で９年目です。</p>
                    <p>最初の頃は、簡単な曲を弾いていましたが、今は「華麗なる大円舞曲」などを弾いているので成長したなと思います。</p>
                    <p>学校では、音楽室で弾くと皆が「すごい！」と言ってくれるようになりました。（小学６年生）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>難しいリズムや記号があり、最初は弾けなかったけれど、教えてもらって最初より上手く弾けるようになるのが嬉しいです。</p>
                    <p>発表会で難しい曲が弾けるようになるか不安になるけれど、なおしてもらったところを気をつけながら練習して</p>
                    <p>本番で弾けると嬉しいし弾くのが楽しいと思えるようになってきて良かった。(小学５年生）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>ピアノが、だんだん弾ける曲が増え、益々ピアノが大好きになりました。</p>
                    <p>沢山、練習したお陰で、今こうしていろんな曲が弾けるので、練習しておいて良かった。（小学６年生）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>ピアノがもっと好きになりました。</p>
                    <p>弾けるようになると嬉しいし、曲を聴いてもピアノのところに注目するようになりました。</p>
                    <p>もっと色々な曲が弾けるようになりたい。（中学１年生）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>練習は大変だけど、難しい曲が弾けるようになったときは、とてつもない達成感を感じられる。</p>
                    <p>長年ピアノを続けていて根気強くなった。ピアノで学んだことを、生活面で活かしていきたい。（小学６年生）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>毎回、レッスンの日を楽しみにしています。</p>
                    <p>弾いてみたかった曲が、だんだん弾けるようになり、レッスンの効果を実感しています。</p>
                    <p>毎回、真剣に教えて頂き、本当に感謝しています。</p>
                    <p>レッスンは、もちろん楽しいのですが、お話するのも楽しいのでレッスンとバランスよく話せたらと思います。（大人の生徒さん）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student1.jpg') }}" class="student-voice-image">
                    <p>最初、ピアノって楽しいなと思いました。</p>
                    <p>スポ少などがあって、出来ないこともあったけど、ピアノを弾く時間が、自分の安らぐ時間でもあった。</p>
                    <p>発表会では、先生が「大丈夫」と励ましてくれたから、緊張がやわらぎ本来の自分の力が出せた。</p>
                    <p>今年の発表会は成功させたい。（中学生　男子）</p>
                </div>
                <div class="voice">
                    <img src="{{ asset('image/student2.jpg') }}" class="student-voice-image">
                    <p>小さい頃のことは、覚えていないけれど、発表会後の嬉しさは、覚えています。</p>
                    <p>今は勉強で忙しくて、たくさん練習時間は、とれていないけれど次の発表会に向けて、頑張りたいです。（中学生）</p>
                </div>
            </div>
        </div>
        <div class="room col-md-12">
            <div class="room-title">
                <h3>教室設備</h3>
            </div>
            <div class="room-body">
                <h4 class="room-body-title">レッスン室はアビテックス</h4>
                <div class="row">
                    <img src="{{ asset('image/room1.jpg') }}" class="col-md-3">
                    <div class="room-body-about">
                        <p>教室のレッスン室には、ヤマハのアビテックスという防音室があります。</p>
                        <p>アビテックスは、優れた音性能をもつ独自の３層構造のパネルを用いていて</p>
                        <p>総合的な防音処理で部屋全体の遮音効果を発揮しています。</p>
                        <p>このアビテックスがあるので早朝や深夜のレッスンも可能となります。</p>
                        <p>このアビテックスの部屋の壁には、厚さ３cmの調音パネルが３ヵ所取り付けてあります。</p>
                        <p>この調音パネルは、音が響きすぎる場合は「吸音」して聴き取りにくいときは「散乱」を適度に行い</p>
                        <p>耳に優しいバランスの良い音にしてくれます。</p>
                    </div>
                </div>
                <h4 class="room-body-title">レッスン室のグランドピアノ</h4>
                <div class="row">
                    <img src="{{ asset('image/room2.jpg')}}" class="room-image-avi">
                    <div class="room-body-about">
                        <p>レッスン室ではカワイのRX-G1のグランドピアノを使用します。</p>
                        <p>このグランドピアノは、小型ながら豊かな低音が特徴でグランドならではの</p>
                        <p>ダイナミックな響きを存分に感じるピアノです。</p>
                        <p>弾きやすいタッチが特徴でカワイピアノならではのやわらかな優しい音色が特徴です。</p>
                        <p>生徒の皆さんは、ピアノの音色が優しい音色でとても弾きやすいと言われます。</p>
                    </div>
                </div>
                <h4 class="room-body-title">待合室の電子ピアノ</h4>
                <div class="row">
                    <img src="{{ asset('image/room3.jpg')}}" class="room-image-avi">
                    <div class="room-body-about">
                        <p>待合室にはカシオCELVIANO　グランドハイブリットGP-500があります。</p>
                        <p>この電子ピアノはカシオとC.ベヒシュタインの共同開発により誕生したピアノです。</p>
                        <p>電子ピアノながらハンマーを使い、限りなくグランドピアノのタッチに近づくよう</p>
                        <p>つくられているため、まるでピアノを弾いているかのようなタッチです。</p>
                        <p>レッスンの前のウォーミングアップとしてこの電子ピアノで練習される方が多く、大活躍です。</p>
                        <p>レッスン室ではない隣の待合室で練習ができますので、誰にも気兼ねなく練習に集中できると</p>
                        <p>生徒の皆さんに大評判です。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
