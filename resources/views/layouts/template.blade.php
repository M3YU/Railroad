<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/top.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <style>
        #top .banner {
            background-size: cover;
            background-position: bottom;
        }

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
            top: -12.5%;
            width: 36%;
        }
    </style>
    @yield('css')
</head>

<body>
    <main>

        <nav>
            <ul class="navbar">
                <li><a><img class="nav-logo" src="{{asset('img/index/LOGO-icon.png')}}" alt=""></a></li>
                <li class="navbar-title">消息
                    <div class="nav-detail">
                        <div class="nav-detail-title">消息</div>
                        <a href="#">
                            <span>鄰近活動</span>
                        </a>
                        <a href="">
                            <span>施工消息</span>
                        </a>
                        <a href="">
                            <span>租車優惠</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">景點
                    <div class="nav-detail">
                        <div class="nav-detail-title">景點</div>
                        <a href="{{route('attractions')}}">
                            <span>網美拍照</span>
                        </a>
                        <a href="">
                            <span>特別推薦</span>
                        </a>
                        <a href="">
                            <span>套裝行程</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">商家
                    <div class="nav-detail">
                        <div class="nav-detail-title">商家</div>
                        <a href="">
                            <span>美食饗宴</span>
                        </a>
                        <a href="">
                            <span>騎上鐵馬</span>
                        </a>
                        <a href="">
                            <span>帶伴手禮</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">揪團
                    <div class="nav-detail">
                        <div class="nav-detail-title">揪團</div>
                        <a href="">
                            <span>在線行程</span>
                        </a>
                        <a href="">
                            <span>照片牆</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">服務
                    <div class="nav-detail">
                        <div class="nav-detail-title">服務</div>
                        <a href="">
                            <span>基本資訊</span>
                        </a>
                        <a href="">
                            <span>交通資訊</span>
                        </a>
                        <a href="">
                            <span>聯絡我們</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">登入
                    <div class="nav-detail">
                        <div class="nav-detail-title">登入</div>
                        <a href="">
                            <span>成為會員</span>
                        </a>
                        <a href="">
                            <span>我的行程</span>
                        </a>
                    </div>
                    </div>
                </li>
            </ul>
        </nav>
        @yield('main')


        <footer>
            @yield('footer')
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
    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    @yield('js')
</body>

</html>