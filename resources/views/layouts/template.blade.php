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
            height: 25.55vw;
        }

        .footer-mask {
            bottom: 47%;
            z-index: 1;
        }

        .grass {
            position: absolute;
            z-index: 1;
            right: 0%;
            top: -6.8%;
            width: 36%;
        }

        .copyright {
            color: #86817c;
            left: 50%;
            bottom: 10%;
            position: absolute;
            font-size: 0.7vw;
            transform: translate(-50%);
        }

        footer .footer-curve {
            top: -137.5%;
        }
    </style>
    @yield('css')
</head>

<body>
    <main>

        <nav>
            <ul class="navbar">
                <li><a href="{{route('index')}}"><img class="nav-logo" src="{{asset('img/index/LOGO-icon.png')}}"
                            alt=""></a></li>
                <li class="navbar-title">消息
                    <div class="nav-detail">
                        <div class="nav-detail-title">消息</div>
                        <a href="{{route('news')}}">
                            <span>鄰近活動</span>
                        </a>
                        <a href="{{route('news')}}">
                            <span>施工消息</span>
                        </a>
                        <a href="{{route('news')}}">
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
                        <a href="{{route('attractions')}}">
                            <span>特別推薦</span>
                        </a>
                        <a href="{{route('attractions')}}">
                            <span>套裝行程</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">商家
                    <div class="nav-detail">
                        <div class="nav-detail-title">商家</div>
                        <a href="{{route('stores')}}">
                            <span>美食饗宴</span>
                        </a>
                        <a href="{{route('stores')}}">
                            <span>騎上鐵馬</span>
                        </a>
                        <a href="{{route('stores')}}">
                            <span>帶伴手禮</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">揪團
                    <div class="nav-detail">
                        <div class="nav-detail-title">揪團</div>
                        <a href="{{route('teams')}}">
                            <span>在線行程</span>
                        </a>
                        <a href="{{route('teams')}}">
                            <span>照片牆</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">服務
                    <div class="nav-detail">
                        <div class="nav-detail-title">服務</div>
                        <a href="{{route('services')}}">
                            <span>基本資訊</span>
                        </a>
                        <a href="{{route('services')}}">
                            <span>交通資訊</span>
                        </a>
                        <a href="{{route('services')}}">
                            <span>聯絡我們</span>
                        </a>
                    </div>
                </li>
                <li class="navbar-title">登入
                    <div class="nav-detail">
                        <div class="nav-detail-title">登入</div>
                        <a href="{{route('members')}}">
                            <span>成為會員</span>
                        </a>
                        <a href="{{route('members')}}">
                            <span>我的行程</span>
                        </a>
                        @guest
                        @else
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span>登出</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
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

                <div class="footer-icon" style="background-image: url({{asset('img/index/LOGO-icon.png')}})"></div>

            </div>

            <div class="copyright">Copyright © 2021 僅供大數據平台開發職訓班教學使用</div>
        </footer>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="{{asset('js/copyright.js')}}"></script>
    <script>
        let icon = document.querySelector('.footer-icon')
        icon.addEventListener('mouseenter',function(){
          icon.style.backgroundImage = 'url({{asset('img/index/老闆.jpg')}})'
        })
        icon.addEventListener('mouseleave',function(){
        icon.style.backgroundImage = 'url({{asset('img/index/LOGO-icon.png')}})'
        })
    </script>
    @yield('js')
</body>

</html>