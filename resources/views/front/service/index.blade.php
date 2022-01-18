@extends('layouts.template')

@section('title','服務中心')

@section('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="{{asset('css/service.css')}}">

<style>
    footer {
        margin-top: 21.5vw;
        bottom: -100%
    }

    .footer-mask {
        bottom: 47%;
        z-index: 1;
    }

    .grass {
        position: absolute;
        z-index: 1;
        right: 0%;
        top: -11.8%;
        width: 36%;
    }

    #top {
        opacity: 0.7;
    }

    footer {
        bottom: -200%;
    }

    .footer-mask {
        bottom: 46%;
    }

    .footer-curve {
        background-color: #86817c;
    }

    #middle .middle-background {
        clip-path: ellipse(120% 100% at 50% -30%);
        top: -44%;
        height: 75.458vw;
    }
</style>

@endsection

@section('main')

<section id="top">
    <div class="title" style="background-image: none;">服務中心________________</div>
    <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
    <div class="slogan">騎車才不會錯過美麗的風景。</div>
    <div class="banner">
    </div>
    <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
    <div class="banner-photo">
    </div>
</section>

<section id="middle">
    <div class="middle-background"></div>
    <div class="col d-flex align-items-baseline title">
        <h1>基本資訊</h1>
    </div>
    <embed class="title-mask" src="{{asset('/img/service/標題用.png')}}" type="">
    <div class="content">
        　　早期獨特建構的鐵馬隧道，能盡情享受，鑽隧道與欣賞過橋梁的沿途風景，還有最具挑戰的髮夾彎，車道在此有 180 度的 U
        自行大彎，以及一段長長的下坡，就像是坐雲霄飛車一樣，迎面而來的風，把所有煩惱都給吹走，讓心情整個輕快起來，最後的重頭戲就是和火車競速，這會是從未經歷過的經驗。
        <br><br>
        　　車道除了跨越大甲溪，穿過身長的隧道，沿途有解說牌，解說著車道發展歷史，休憩涼亭，更是提供遊客舒服遮蔭的地方，靜靜休憩著欣賞優美的環境，可與東豐自行車綠廊交接 並可與東豐自行車綠廊交接，形成總長約 18
        公里，且具獨特、懷舊、休閒的自行車專用道休閒的自行車專用道。
    </div>
    <div class="bike-img"></div>
</section>

<section id="bottom">
    <div class="background">
        <div class="col d-flex align-items-baseline title">
            <h1>交通資訊</h1>
        </div>
        <embed class="title-mask" src="{{asset('/img/service/標題用.png')}}" type="">
        <h3 class="subtitle">Transportation</h3>

        <div class="card-group">
            <div class="cards">
                <div class="icon"><i class="fas fa-bus"></i></div>
                <div class="cards-title">公車</div>
                <div class="cards-content">
                    <h5>台中火車站出發 805線</h5>台中火車站－谷關 <br>行經國道一號及四號，停靠東豐、后豐鐵馬道交會處。
                    <h5>高鐵烏日站出發 153線</h5>高鐵臺中站－谷關 <br>
                </div>
            </div>
            <div class="cards">
                <div class="icon"><i class="fas fa-car"></i></div>
                <div class="cards-title">開車</div>
                <div class="cards-content">行經國道一號在大雅/豐原處轉接到國道四號豐原端下交流道，<br>迴轉接國豐路三段，沿路即可看到指標告示牌引導。</div>
            </div>
            <div class="cards">
                <div class="icon"><i class="fas fa-subway"></i></div>
                <div class="cards-title">火車</div>
                <div class="cards-content">
                    <h5>后里火車站</h5>出火車站後左轉沿著后科路一路南走，直到國豐路三段。
                    <h5>豐原火車站</h5>出火車站後站可看見豐勢路一段向北行台三線，直到國豐路三段。
                </div>
            </div>
        </div>
    </div>
    <div class="title">聯絡我們</div>
    <embed class="title-mask" src="{{asset('/img/service/banner點綴.png')}}" type="">

    <div class="pen-title">
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">聯絡我們</h1>
                <form method="POST" action="{{route('contact.mail')}}">
                    @csrf
                    <div class="input-container">
                        <input type="text" id="name" required="required" name="name" />
                        <label for="name">姓名</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="phone" name="phone" required="required" />
                        <label for="phone">電話</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="email" name="email" required="required" />
                        <label for="email">電子信箱</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="#{type}" id="content" name="content" required="required" />
                        <label for="content">意見回饋</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="submit"><span>傳送</span></button>
                    </div>
                </form>
            </div>
            <div class="card alt">
                <div class="toggle">
                    <i class="fas fa-pen-nib"></i>
                </div>
            </div>
        </div>

</section>

@endsection

@section('footer')
<embed class="footer-mask" src="{{asset('./img/index/footer用-總和.png')}}" type="">
<embed class="grass" src="{{asset('./img/index/footer草叢.png')}}" type="">


@endsection

@section('js')


<script>
    $('.toggle').on('click', function () {
            $('.container').stop().addClass('active');
        });

        $('.close').on('click', function () {
            $('.container').stop().removeClass('active');
        });
</script>
<script src="{{asset('js/service.js')}}"></script>
@endsection