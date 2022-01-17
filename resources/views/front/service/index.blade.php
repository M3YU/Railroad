<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服務中心</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/service.css">
    <style>
        footer {
            margin-top: 21.5vw;
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
            bottom: -300%;
        }

        .footer-mask {
            bottom: 46%;
        }

        .footer-curve {
            background-color: #86817c;
        }

        #middle .middle-background {
            clip-path: ellipse(100% 100% at 50% -22%);
        }
    </style>
</head>

<body>

    <section id="middle">
        <div class="middle-background"></div>
        <div class="col d-flex align-items-baseline title">
            <h1>基本資訊</h1>
        </div>
        <embed class="title-mask" src="/img/service/標題用.png" type="">
        <h3 class="subtitle">Information</h3>
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
            <embed class="title-mask" src="/img/service/標題用.png" type="">
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
        <embed class="title-mask" src="/img/service/banner點綴.png" type="">

        <div class="pen-title">
            <div class="container">
                <div class="card"></div>
                <div class="card">
                    <h1 class="title" >聯絡我們</h1>
                    <form method="POST" action="{{route('contact.mail')}}">
                      @csrf
                        <div class="input-container">
                            <input type="text" id="name"  required="required" name="name"/>
                            <label for="name" >姓名</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" id="phone" name="phone" required="required" />
                            <label for="phone" >電話</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" id="email" name="email" required="required" />
                            <label for="email" >電子信箱</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="#{type}" id="content" name="content" required="required" />
                            <label for="content" >意見回饋</label>
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

    <footer>
        <embed class="footer-mask" src="./img/index/footer用-總和.png" type="">
        <embed class="grass" src="./img/index/footer草叢.png" type="">
        <div class="footer-curve"></div>
        <div class="footer-container">
            <div class="footer-menu">
                <div class="footer-menu-title">最新消息</div>
                <div class="footer-menu-item">最近活動</div>
                <div class="footer-menu-item">施工消息</div>
                <div class="footer-menu-item">租車優惠</div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">景點介紹</div>
                <div class="footer-menu-item">朋友聚會</div>
                <div class="footer-menu-item">情侶約會</div>
                <div class="footer-menu-item">親子同樂</div>
                <div class="footer-menu-item">歷史巡禮</div>
                <div class="footer-menu-item">自然景觀</div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">附近店家</div>
                <div class="footer-menu-item">美食饗宴</div>
                <div class="footer-menu-item">伴手禮</div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">揪團</div>
                <div class="footer-menu-item">照片牆</div>
                <div class="footer-menu-item">揪團群</div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">會員系統</div>
                <div class="footer-menu-item">申請會員</div>
                <div class="footer-menu-item">管理</div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">服務中心</div>
                <div class="footer-menu-item">交通資訊</div>
                <div class="footer-menu-item">聯絡我們</div>
            </div>

            <div class="footer-news"></div>

        </div>


    </footer>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        $('.toggle').on('click', function () {
            $('.container').stop().addClass('active');
        });

        $('.close').on('click', function () {
            $('.container').stop().removeClass('active');
        });
    </script>
    <script src="/js/service.js"></script>
</body>

</html>