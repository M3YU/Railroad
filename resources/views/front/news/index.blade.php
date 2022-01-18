@extends('layouts.template')

@section('title', '最新消息')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/news.css')}}">
<style>

</style>
@endsection

@section('main')

<section id="top">
  <div class="title" style="background-image: none;">最新消息________________</div>
  <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner" style="background-image: url('{{asset('img/news/31-yutzu4.jpg')}}')"></div>
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
    @foreach ($news as $item)
    <div class="row d-flex">
      <div class="col-2">
      </div>
      <div class="col-3">
        <div class="card mb-3">
          <div class="card-title">
            <h5>{{$item->date}}</h5>
          </div>
          <div class="card-title">
            <h5>{{$item->title}}</h5>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card mb-3">
          <div class="card-body">
            <p><i class="fas fa-truck-pickup me-3"></i>{{$item->content}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
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
      <div class="col-4">
        @foreach ($carRentalInfos as $carRentalInfo)
        <img class="accordion-photo" src="{{Storage::url($carRentalInfo->image_url)}}" alt="{{'photo-'.$carRentalInfo->id}}" @if ($loop->index > 0) style="display:none;" @endif>
        @endforeach
      </div>
      <!-- 手風琴 -->
      <div class="col-4 item-content">
        <div class="accordion" id="accordionExample">
          @foreach ($carRentalInfos as $carRentalInfo)
          <div class="accordion-item">
            <h2 class="accordion-header" id="{{'heading-'.$carRentalInfo->id}}">
              <button class="accordion-button @if ($loop->index > 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#{{'collapse-'.$carRentalInfo->id}}"
                aria-expanded="@if ($loop->index == 0) true @else false @endif" aria-controls="{{'collapse-'.$carRentalInfo->id}}">
                {{$carRentalInfo->title}}
              </button>
            </h2>
            <div id="{{'collapse-'.$carRentalInfo->id}}" class="accordion-collapse collapse @if ($loop->index == 0) show @endif" aria-labelledby="{{'heading-'.$carRentalInfo->id}}"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>{{$carRentalInfo->content}}</strong>
              </div>
            </div>
          </div>
          @endforeach
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="{{asset('js/news.js')}}"></script>
@endsection