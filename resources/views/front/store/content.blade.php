@extends('layouts.template')

@section('title', '商店')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/store-content.css')}}">
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
  <section class="store">
    <div class="row mb-5">
      <div class="col d-flex align-items-baseline title">
        <h1>{{$stores->name}}</h1>
      </div>
      <h3 class="subtitle">{{$stores->subtitle}}</h3>
    </div>
    <div class="row row-cols-2 justify-content-center mb-5">
      <div class="col-5 me-4 store-img" style="background-image: url('{{Storage::url($stores->image_url)}}')"></div>
      <div class="col-7 row row-cols-3 justify-content-lg-evenly justify-content-md-center align-content-end">
        <div class="col-8 col-sm-7 col-md-5 col-lg-4 mb-xl-5 my-3 store-title">
          <div class="store-title-border"></div>
          <h2>{{$stores->name}}</h2>
        </div>
        <div class="col-4 col-sm-3 col-md-2 col-lg-8 add-cart align-self-end mb-5">
          <button class="btn btn-secondary" aria-label="Mute">
            <i class="bi bi-bookmark-star-fill"></i>
          </button>
        </div>
        @foreach ($storeImgs as $index => $storeImg)
              @if ($index<3)
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-3 mb-sm-3 mb-md-3 store-sub-img" 
                style="background-image: url({{Storage::url($storeImg->image_url)}})"></div>
              @endif
        @endforeach

      </div>
    </div>
    <div class="row row-cols-2 justify-content-center my-5 pt-5">
      <div class="col-5 ps-5 news-title">
        <h2>{{$stores->name}}相關報導文章</h2>
        <div class="news-title-border"></div>
      </div>
      <div class="col-7 px-4 news-content">
        <p class="news-content-p">
          {!!$stores->content!!}
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col"></div>
      <div class="col"></div>
    </div>
  </section>
</div>
<div class="container-fluid px-0">
  <section class="maps">
    <div class="container">
      <div class="row mt-5 mb-0">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-2 justify-content-center">
          <div class="col-5 d-flex flex-wrap flex-column justify-content-between">
            <div class="col-12 text-white map-title">
              <h2>地理位置</h2>
              <div class="map-title-border"></div>
            </div>
            <div class="col-6 comment p-3 rounded-3 bg-white align-self-center">
              <div class="comment-top d-flex justify-content-between">
                <h6>評論摘要</h6>
                <i class="far fa-question-circle text-muted"></i>
              </div>
              <div class="comment-middle">
                <div class="row mb-3">
                  <div class="col-8 row-cols-2 d-flex flex-wrap">
                    <span class="col-1 align-self-center">5</span>
                    <div class="progress col-11 align-self-center">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="col-1 align-self-center">4</span>
                    <div class="progress col-11 align-self-center">
                      <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="col-1 align-self-center">3</span>
                    <div class="progress col-11 align-self-center">
                      <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="col-1 align-self-center">2</span>
                    <div class="progress col-11 align-self-center">
                      <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="col-1 align-self-center">1</span>
                    <div class="progress col-11 align-self-center">
                      <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="comment-info d-flex flex-wrap flex-column justify-content-center align-items-center">
                      <div class="score display-6">4.5</div>
                      <div class="stars d-flex mb-2">
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star fa-xs"></i>
                        <i class="fas fa-star-half-alt fa-xs"></i>
                      </div>
                      <div class="comments text-primary">374 篇評論</div>
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="comment-card py-1">
                    <div class="row align-items-center">
                      <div class="col-2">
                        <div class="user-img rounded-circle bg-secondary"></div>
                      </div>
                      <div class="col-10 ps-1">
                        <p class="mb-0">"老闆超級親切，芋圓冰料好實在。配料的珍珠很Q，仙草滑順，一杯45塊，真的很推！"</p>
                      </div>
                    </div>
                  </div>
                  <div class="comment-card py-1">
                    <div class="row align-items-center">
                      <div class="col-2">
                        <div class="user-img rounded-circle bg-secondary"></div>
                      </div>
                      <div class="col-10 ps-1">
                        <p class="mb-0">"隱藏版的在地小店，料多味美，老闆熱情 開車的朋友可以停麥當勞旁停車場"</p>
                      </div>
                    </div>
                  </div>
                  <div class="comment-card py-1">
                    <div class="row align-items-center">
                      <div class="col-2">
                        <div class="user-img rounded-circle bg-secondary"></div>
                      </div>
                      <div class="col-10 ps-1">
                        <p class="mb-0">"好吃份量足 全手工自製芋圓蕃薯圓 老師年輕熱情有活力 路過不要錯過嘿 (^ ^)"</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment-bottom d-flex flex-column align-items-center mt-3">
                <button class="comment-btn btn btn-outline-secondary rounded-pill">
                  <i class="fas fa-edit"></i>
                  <span> 撰寫評論</span>
                </button>
                <div class="comment-footer mt-3 text-muted">
                  <p>google maps 上的評論摘要</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-7 px-4 text-center store-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.4747731257908!2d120.82125521536896!3d24.260142275027874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691c8a7eaa377d%3A0xa7a94e40acbf12a7!2zM1HoiovlnJM!5e0!3m2!1szh-TW!2stw!4v1642220924117!5m2!1szh-TW!2stw"
              width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
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
      {{-- <h3 class="subtitle">{{$categories->}}</h3> --}}
    </div>

   


    <div class="row d-flex justify-content-evenly flex-wrap pt-5">


      @foreach ($souvenirs as $souvenir)
      <div class="col px-0">
        <figure class="goods">
          <div class="img" style="background-image: url({{Storage::url($souvenir->image_url)}})"></div>
          <figcaption>
            <i class="ion-upload"></i>
            <a href="{{route('stores.content',['id' =>$souvenir->id])}}"></a> 
            <h4>{{$souvenir->name}}</h4> 
            <h2>{{$souvenir->subtitle}}</h2>
          </figcaption>
          <!-- <a href="#"></a> -->
        </figure>
        <p>
          {!!$souvenir->content!!}
        </p>
      </div>
    @endforeach
    </div>
  </section>
</div>




@endsection

@section('footer')
<embed class="footer-mask" src="{{asset('/img/index/footer用-總和.png')}}" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
@endsection