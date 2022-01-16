@extends('layouts.template')

@section('title', '服務中心')

@section('css')
<link rel="stylesheet" href="{{asset('css/service.css')}}">

<style>
  #top {
    opacity: 0.7;
  }

  footer {
    bottom: -196%;
  }

  .footer-mask {
    bottom: 46%;
  }
</style>
@endsection

@section('main')

<section id="top">
  <div class="title">服務中心________________</div>
  <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner"></div>
  <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>

<section id="middle">
  <div class="middle-background"></div>
  <div class="col d-flex align-items-baseline title">
    <h1>基本資訊</h1>
  </div>
  <embed class="title-mask" src="{{asset('img/service/標題用.png')}}" type="">
  <h3 class="subtitle">Information</h3>
  <div class="content">
    　　騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見的工程作品，光是在遠處觀望便能感受其滂薄的氣勢。騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見的工程作品，光是在遠處觀望便能感受其滂薄的氣勢。騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見的工程作品，光是在遠處觀望便能感受其滂薄的氣勢。騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見的工程作品，光是在遠處觀望便能感受其滂薄的氣勢。騎出隧道以後，眼前所見即為花樑鋼橋，同樣建置於日治時期，全長約382公尺，每兩個橋墩上都有一組花樑的鋼製桁架，是現今較為罕見
  </div>


</section>

<section id="bottom">
  <div class="background">
    <div class="col d-flex align-items-baseline title">
      <h1>交通資訊</h1>
    </div>
    <embed class="title-mask" src="{{asset('img/service/標題用.png')}}" type="">
    <h3 class="subtitle">Transportation</h3>

    <div class="cards">
      <div class="card">
        <div class="card-title">我是title</div>
        <div class="card-content">內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</div>
      </div>
      <div class="card">
        <div class="card-title">我是title</div>
        <div class="card-content">內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</div>
      </div>
      <div class="card">
        <div class="card-title">我是title</div>
        <div class="card-content">內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</div>
      </div>
    </div>
  </div>
  <div class="title">聯絡我們</div>
  <embed class="title-mask" src="{{asset('img/service/banner點綴.png')}}" type="">
  <form action="" class="contact">
    <div>用戶回饋</div>
    <label for="name">姓名</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="phone">電話</label>
    <input type="text" name="phone" id="phone">
    <label for="detail">問題</label>
    <textarea name="detail" id="detail"></textarea>
    <button type="submit"></button>
  </form>

</section>



@endsection

@section('footer')
<embed class="footer-mask" src="{{asset('img/index/footer用-總和.png')}}" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">
@endsection

@section('js')

@endsection