@extends('layouts.template')

@section('title', '最新消息')


@section('css')
<link rel="stylesheet" href="{{asset('css/news.css')}}">
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
  }
</style>
@endsection

@section('main')

<section id="top">
  <div class="title" style="background-image: none;">最新消息________________</div>
  <embed class="title-mask" src="{{asset('img/top/banner點綴.svg')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner" style="background-image: url('{{asset('img/news/11-www.17travel.tw-ForestPark-1.jpg')}}')"></div>
  <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>
<div class="container">
  <!-- 鄰近活動 -->
  <section class="activity">
    <div class="row my-5">
      <div class="col d-flex align-items-baseline title title-top">
        <h1>鄰近活動</h1>
      </div>
      <h3 class="subtitle">Activity</h3>
    </div>

    <div class="row show">

      <ul class="accordion-group" id="accordion">
        <li style="background-image: url('{{asset('/img/news/03-sheep17go.com-RongTing-3.JPG')}}');">
          <div class="accordion-overlay"></div>
          <h3>榮町雜貨店</h3>
          <section class="hidden-xs">
            <article>
              <p>復古雜貨店，重回童年美好時光</p>
            </article>
          </section>
        </li>
        <li class="out" style="background-image: url('{{asset('/img/news/04-FB@paintballyeke-YeKe-1.jpg')}}');">
          <div class="accordion-overlay"></div>
          <h3>野克漆彈</h3>
          <section class="hidden-xs">
            <article>
              <p>三五好友一起聚會，來場刺激熱血的對戰吧！
              </p>
            </article>
          </section>
        </li>
        <li style="background-image: url('{{asset('/img/news/10-alberthsieh.com-26323-flpo_horse.jpg')}}');">
          <div class="accordion-overlay"></div>
          <h3>后里馬場</h3>
          <section class="hidden-xs">
            <article>
              <p>像古代人般，策馬奔騰享受遼闊的草原</p>
            </article>
          </section>
        </li>
        <li style="background-image: url('{{asset('/img/news/31-yutzu4.pixnet.net-MeiTzu-1.jpg')}}');">
          <div class="accordion-overlay"></div>
          <h3>梅子車站</h3>
          <section class="hidden-xs">
            <article>
              <p>坐上列車，穿越歷史軌道留下的紀念回憶</p>
            </article>
          </section>
        </li>
      </ul>
    </div>
  </section>

  <!-- 施工消息 -->
  <section class="fix">
    <div class="row my-5">
      <div class="col d-flex align-items-baseline title">
        <h1>施工消息</h1>
      </div>
      <h3 class="subtitle">Construction news</h3>
    </div>
    <div class="row d-flex">
      <div class="col-2"></div>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-title">
            <h5>2022/01/01</h5>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card mb-3">
          <div class="card-body">
            <p>國豐路三段151k施工</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-2"></div>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-title">
            <h5>2021/12/31</h5>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card mb-3">
          <div class="card-body">
            <p>國豐路三段與台三線因跨年活動全線暫停車輛進入</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-2"></div>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-title">
            <h5>2021/12/06</h5>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card mb-3">
          <div class="card-body">
            <p>國豐路三段999k施工</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 租車優惠 -->
  <section class="discount">
    <div class="row my-5">
      <div class="col d-flex align-items-baseline title">
        <h1>租車優惠</h1>
      </div>
      <h3 class="subtitle">Car rental deals</h3>
    </div>
    <div class="row">
      <div class="col-2"></div>
      <!-- 左方圖片 -->
      <div class="col-4  ">
        <img class="accordion-photo" src="{{asset('/img/news/租車-02.jpg')}}">
      </div>
      <!-- 手風琴 -->
      <div class="col-4 item-content">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                鐵馬哥租車
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>現在租車享免費停車優惠
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                輕鬆租車
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>租車即可有烤肉套餐85折優惠
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                天天租車
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>現在租車享免費停車優惠
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>


@endsection

@section('footer')
<embed class="footer-mask" src="/img/index/footer用-總和.png" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
<script src="{{asset('js/news.js')}}"></script>
@endsection