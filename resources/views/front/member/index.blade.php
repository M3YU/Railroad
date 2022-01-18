@extends('layouts.template')

@section('title', '會員中心')

@section('css')
<link rel="stylesheet" href="{{asset('css/member.css')}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('main')

<section id="top">
  <div class="title">揪成會員________________</div>
  <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner" style="background-image: url('{{asset('img/member/11-www.17travel.tw-ForestPark-1.jpg')}}')">
  </div>
  <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
  <div class="banner-photo">
  </div>

  <!-- 背景有一段空白處 用白色去填 -->
  <div class="white-background"></div>
</section>
<section id="bottom">
  <!-- 登入表單 要看的話把 style="display: none;" 移至下面自訂行程 -->

  @guest
  <div class="container">
    <div class="row main active" id="main">
      <section class="login">
        <article class="half">
          <h1>Azure</h1>
          <div class="tabs">
            <span class="tab signin active"><a href="#signin">Sign in</a></span>
            <span class="tab signup"><a href="#signup">Sign up</a></span>
          </div>
          <div class="content">
            <div class="signin-cont cont">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" id="email" class="inpt" required="required" placeholder="Your email"
                  value="{{ old('email') }}" autocomplete="email" autofocus>
                <label for="email">Your email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="password" name="password" id="password" class="inpt" required="required"
                  placeholder="Your password" @error('password') is-invalid @enderror autocomplete="current-password">
                <label for="password">Your password</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1" {{ old('remember')
                  ? 'checked' : '' }}>
                <label for="remember">Remember me</label>
                <div class="submit-wrap">
                  <input type="submit" value="Sign in" class="submit">
                  <a href="#" class="more">Forgot your password?</a>
                </div>
              </form>
            </div>
            <div class="signup-cont cont">
              <form action="#" method="post" enctype="multipart/form-data">
                <input type="name" name="name" id="name" class="inpt" required="required" placeholder="Your name">
                <label for="name">Your name</label>
                <input type="email" name="email" id="email" class="inpt" required="required" placeholder="Your email">
                <label for="email">Your email</label>
                <input type="password" name="password" id="password" class="inpt" required="required"
                  placeholder="Your password">
                <label for="password">Your password</label>
                <div class="submit-wrap">
                  <input type="submit" value="Sign up" class="submit">
                  <a href="#" class="more">Terms and conditions</a>
                </div>
              </form>
            </div>
          </div>
        </article>
    </div>

  </div>

  @else
  <!-- 自訂行程  要看的話把 style="display: none;" 移至登入表單-->

  <div class="self-trip">
    <div class="title">自訂行程_____________</div>
    <embed class="title-mask" src="{{asset('img/member/標題用.png')}}" type="">
    <div class="subtitle">我是文字</div>

    <div class="trip-navbar">
      <div class="trip-nav"><i class="fas fa-car fa-2x"></i></div>
      <div class="trip-nav"><i class="fas fa-clock fa-2x"></i></div>
      <div class="trip-nav"><i class="fas fa-clipboard-list fa-2x"></i></div>
      <div class="trip-nav"><i class="fas fa-utensils fa-2x"></i></div>
      <div class="trip-nav"><i class="fas fa-store-alt fa-2x"></i></div>
    </div>
    <div class="nav-title">
      <h4>集合地</h4>
      <h4>時間</h4>
      <h4>行程</h4>
      <h4>飲食</h4>
      <h4>租車行</h4>
    </div>
    

    <div id="carousel" class="trip-carousel">
      <div class="carousel-mask"></div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content">內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內</div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-image"></div>
            <div class="swiper-title">Title</div>
            <div class="swiper-content"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endguest




</section>

@endsection

@section('footer')
<embed class="footer-mask" src="{{asset('/img/index/footer用-總和.png')}}" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
<script src="{{asset('js/member.js')}}"></script>
@endsection