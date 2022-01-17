<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>揪騎后豐</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <style>
    .copyright {
      color: #86817c;
      left: 50%;
      bottom: 10%;
      position: absolute;
      font-size: 0.7vw;
      transform: translate(-50%);
    }

    footer {
      height: 25.55vw;
    }
  </style>
</head>

<body>
  <main>

    <nav>
      <ul class="navbar">
        <li><a href="{{route('index')}}"><img class="nav-logo" src="{{asset('img/index/LOGO-icon.png')}}" alt=""></a>
        </li>
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
          </div>
        </li>
      </ul>
    </nav>

    <section id="top">
      <div class="logo"><img src="{{asset('img/index/LOGO.png')}}" alt=""></div>
      <div class="slogan slogan-first">坐車太快，徒步太慢，</div>
      <div class="slogan slogan-end">騎車才不會錯過美麗的風景。</div>
      <div class="sub-slogan sub-slogan-first">自由</div>
      <div class="sub-slogan sub-slogan-middle">的心</div>
      <embed class="sub-slogan-mask" src="{{asset('img/index/標題用.png')}}" type="">
      <div class="sub-slogan sub-slogan-end">和一輛車就夠了。</div>
      <div class="bike-img"></div>
      <embed class="bike-mask" src="{{asset('img/index/縮小版.png')}}" type="">
      <div class="banner"><img src="{{asset('img/index/06-www.leeleelin.com-SteelBridge-5.jpg')}}" alt=""></div>
      <embed class="banner-mask" src="{{asset('img/index/nav用.png')}}" type="">



    </section>

    <section id="middle">
      <div class="bike-moving"></div>
      <embed class="middle-background" src="{{asset('img/index/首頁背景.png')}}" type="">
      <div id="visual" class="column d-flex">

        <div class="gorgeousness-img left left-1" data-aos="fade-right"></div>


        <div class="gorgeousness-text right" data-aos="fade-right">
          <div class="title">視覺Visual_______________</div>
          <div class="content">騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治
            時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見的工程作品，光是在遠處觀望便能感受其滂薄的氣勢。
            <br> 騎在橋上，橫跨寬大的大甲溪流，除了能近距離一探雄偉的橋樑結構，向橋外眺望也能欣賞溪石相間的秀麗景緻，和其他單車道有著截然不同的風光。
          </div>

        </div>
      </div>
      <div id="taste" class="column d-flex">

        <div class="gorgeousness-text left" data-aos="fade-left">
          <div class="title">味覺Taste_______________</div>
          <div class="content">后豐鐵馬道過去是臺鐵的舊山線，亦即停用或廢棄的鐵道，如今改建成自行車道，全長約4.5公里，路段看似短卻有非常多樣化的景觀。
            <br> 從國道4號豐原端的高架橋下方開始，依著鐵馬道的起訖路程，包括蒼翠的田園綠林、迤邐清幽的隧道、宏偉的鋼橋以及壯闊的大甲溪流，都是這條鐵馬道吸引人的地方。
          </div>
        </div>


        <div class="gorgeousness-img right right-1" data-aos="fade-left"></div>

      </div>
      <div id="tactile" class="column d-flex">

        <div class="gorgeousness-img left left-2" data-aos="fade-right"></div>


        <div class="gorgeousness-text right" data-aos="fade-right">
          <div class="title">觸覺Tactile_______________</div>
          <div class="content">
            在陽光溫煦、氣溫合宜之際，騎乘在鄉林的單車道上，一面悠閒的騎著與朋友談天、一面享受自然純粹的風光，當微風穿過耳際，挾帶著自然的清香，一不注意便會沈醉於這裡的美麗當中，拋下平時的煩惱和壓力，此刻就只專注在這場自然的騎乘裡。
            <br> 林蔭夾道的悠閒騎乘
          </div>
        </div>

      </div>
      <div id="hearing" class="column d-flex">

        <div class="gorgeousness-text left" data-aos="fade-left">
          <div class="title">聽覺Hearing_____________</div>
          <div class="content">騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治
            時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見的工程作品，光是在遠處觀望便能感受其滂薄的氣勢。
            <br> 騎在橋上，橫跨寬大的大甲溪流，除了能近距離一探雄偉的橋樑結構，向橋外眺望也能欣賞溪石相間的秀麗景緻，和其他單車道有著截然不同的風光。
          </div>
        </div>


        <div class="gorgeousness-img right right-2" data-aos="fade-left"></div>

      </div>

      <div class="anchor-point">
        <div class="anchor-point-titles">
          <a href="#visual">
            <div class="anchor-point-title">視覺Visual</div>
          </a>
          <a href="#taste">
            <div class="anchor-point-title">味覺Taste</div>
          </a>
          <a href="#tactile">
            <div class="anchor-point-title">觸覺Tactile</div>
          </a>
          <a href="#hearing">
            <div class="anchor-point-title">聽覺Hearing</div>
          </a>
          <a href="#photo">
            <div class="anchor-point-title">相片牆Photo</div>
          </a>
        </div>
        <div class="anchor-point-img">
          <div class="anchor-point-circle"></div>
          <div class="anchor-point-line"></div>
          <div class="anchor-point-circle"></div>
          <div class="anchor-point-line"></div>
          <div class="anchor-point-circle"></div>
          <div class="anchor-point-line"></div>
          <div class="anchor-point-circle"></div>
          <div class="anchor-point-line"></div>
          <div class="anchor-point-circle"></div>
        </div>
      </div>
      <div class="mountain"></div>
    </section>

    <section id="bottom">
      <embed class="photo-wall-mask" src="{{asset('img/index/照片牆用-1.png')}}" type="">
      <div id="photo" class="photo-wall">

        <div class="photo-wall-title">相片牆</div>
        <embed class="photo-wall-title-mask" src="{{asset('img/index/照片牆用-2.png')}}" type="">
        <ul class="photo-wall-categories">
          <li class="photo-wall-category">All</li>
          <li class="photo-wall-category">Animation</li>
          <li class="photo-wall-category">Videos</li>
          <li class="photo-wall-category">Photo</li>
          <li class="photo-wall-category">Movie</li>
        </ul>

        <div class="photos">
          @foreach ($imgs as $img)
          <div class="photo" style="background-image: url({{Storage::url($img->image_url)}});">
          </div>
          @endforeach


        </div>
      </div>
      <embed class="footer-mask" src="{{asset('img/index/footer用-總和.png')}}" type="">
      <embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">
      <a href="">
        <div class="billboard"></div>
      </a>
    </section>

    <footer>
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

      <div class="copyright">Copyright © 2021 僅供大數據平台開發職訓班教學使用</div>
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
  <script src="{{asset('js/index.js')}}"></script>
  <script src="{{asset('js/copyright.js')}}"></script>
</body>

</html>