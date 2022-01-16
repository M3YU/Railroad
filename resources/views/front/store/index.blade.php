@extends('layouts.template')

@section('title', '商店')

@section('css')
<link rel="stylesheet" href="{{asset('css/store.css')}}">
@endsection

@section('main')

<section id="top">
  <div class="title">鄰近商店________________</div>
  <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner" style="background-image: url('{{asset('img/store/21-chevigal.com-mountain-02.jpg')}}')">
  </div>
  <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
  <div class="banner-photo">
  </div>

  <!-- 背景有一段空白處 用白色去填 -->
  <div class="white-background"></div>
</section>

<div class="container">
  <section class="foods">
    <div class="row mb-5">
      <div class="col d-flex align-items-baseline title">
        <h1>美食饗宴</h1>
      </div>
      <h3 class="subtitle">Food recommendation</h3>
    </div>
    <div class="row">
      <div class="col">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
            <div class="swiper-slide">
              <div class="img"></div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="container-fluid px-0">
  <section class="maps">
    <div class="container">
      <div class="row my-5">
        <div class="col d-flex align-items-baseline title">
          <h1>騎上鐵馬</h1>
        </div>
        <h3 class="subtitle">Attractions Map</h3>
      </div>
      <div class="row">
        <div class="col">
          <iframe src="https://www.google.com/maps/d/embed?mid=1lTHLaZ8cq4jGGMmqdR7Nx4_dqCtyOtAd&ehbc=2E312F"
            width="100%" height="100%"></iframe>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="container">
  <section class="omiyage">
    <div class="row my-5">
      <div class="col d-flex align-items-baseline title">
        <h1>帶伴手禮</h1>
      </div>
      <h3 class="subtitle">Souvenirs Recommended</h3>
    </div>
    <div class="row d-flex justify-content-evenly flex-wrap pt-5">
      <div class="col px-0">
        <figure class="goods">
          <div class="img"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <h4>石山丘</h4>
            <h2>McKenzie</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>石岡超人氣神級吐司之稱，沒預約還吃不到，招牌紅寶石是用花蓮紅粟米及四種起司來製作，口感Q彈好吃，非常真材實料
        </p>
      </div>
      <div class="col px-0">
        <figure class="goods">
          <div class="img"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <h4>Inverness</h4>
            <h2>McKenzie</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ex vero quis. Quia
          ad sed veritatis dicta! Nulla non explicabo cumque vel numquam adipisci ex quasi minima,
          in porro iste.
        </p>
      </div>
      <div class="col px-0">
        <figure class="goods">
          <div class="img"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <h4>Inverness</h4>
            <h2>McKenzie</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ex vero quis. Quia
          ad sed veritatis dicta! Nulla non explicabo cumque vel numquam adipisci ex quasi minima,
          in porro iste.
        </p>
      </div>
      <div class="col px-0">
        <figure class="goods">
          <div class="img"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <h4>Inverness</h4>
            <h2>McKenzie</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ex vero quis. Quia
          ad sed veritatis dicta! Nulla non explicabo cumque vel numquam adipisci ex quasi minima,
          in porro iste.
        </p>
      </div>
      <div class="col px-0">
        <figure class="goods">
          <div class="img"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <h4>Inverness</h4>
            <h2>McKenzie</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ex vero quis. Quia
          ad sed veritatis dicta! Nulla non explicabo cumque vel numquam adipisci ex quasi minima,
          in porro iste.
        </p>
      </div>
      <div class="col px-0">
        <figure class="goods">
          <div class="img"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <h4>Inverness</h4>
            <h2>McKenzie</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ex vero quis. Quia
          ad sed veritatis dicta! Nulla non explicabo cumque vel numquam adipisci ex quasi minima,
          in porro iste.
        </p>
      </div>
    </div>
  </section>
</div>


@endsection

@section('footer')
<embed class="footer-mask" src="{{asset('/img/index/footer用-總和.png')}}" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">
@endsection

@section('js')
<script src="{{asset('js/store.js')}}"></script>
@endsection