@extends('layouts.template')

@section('title', '會員中心')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.6/sweetalert2.css">
<link rel="stylesheet" href="{{asset('css/member.css')}}">

<style>
  .grass {
    top: -1.85vw;
  }
</style>
@endsection

@section('main')

<section id="top">
  <div class="title">揪成會員________________</div>
  <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner" style="background-image: url('{{asset('img/member/32-travel.taichung.jpg')}}')">
  </div>
  <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
  <div class="banner-photo" @guest @else style="background-image:none" @endguest>
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
          <h1>揪成會員</h1>
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
              <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                  <div>
                    <input type="text" name="name" id="name" class="inpt" @error('name') is-invalid @enderror
                      required="required" value="{{ old('name') }}" placeholder="Your name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="name">名字</label>
                  </div>

                  <div>
                    <input type="email" name="email" id="email" class="inpt" @error('email') is-invalid @enderror
                      required="required" value="{{ old('email') }}" placeholder="Your email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="email">電子信箱</label>
                  </div>

                  <div>
                    <input type="password" name="password" id="password" class="inpt" @error('password') is-invalid
                      @enderror required="required" placeholder="Your password">
                    <label for="password">你的密碼</label>
                    <div class="submit-wrap">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    <div>
                      <input type="password" name="password_confirmation" id="password-confirm" class="inpt"
                        required="required" placeholder="Your password" required autocomplete="new-password>
                        <label for=" password>確認密碼</label>
                      <div class="submit-wrap">
                      </div>

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
    <div class="title">自訂行程</div>
    <embed class="title-mask" src="{{asset('img/member/標題用.png')}}" type="">
    <div class="subtitle">Customize your itinerary</div>

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
      <form class="row row-cols-lg-auto g-3 mx-auto pt-4" action="{{ route('journey-cart.step01-store') }}"
        method="POST">
        @csrf
        <div class="col-12">
          <label class="visually-hidden" for="orders-name">行程標題</label>
          <input type="text" class="form-control" id="orders-name" name="name" placeholder="請輸入自訂行程標題" required>
          <h6 class="text-center text-warning mt-1"><i class="fas fa-exclamation-triangle fx-2x"></i> 請先加入景點及店家！</h6>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" id="submit-btn">儲存行程</button>
        </div>
      </form>
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach ($items as $item)
          <div class="swiper-slide">
            <div class="delete-div">
              <button type="button" class="btn btn-danger btn-sm rounded-circle shadow-sm mr-2 px-1 py-0 delete-btn"
                data-id="{{$item->id}}">
                <i class="fas fa-times"></i></button>
            </div>
            <div class="swiper-image" style="background-image: url('{{Storage::url($item->attributes->image_url)}}')">
            </div>
            <div class="swiper-title">{{$item->name}}</div>
            <div class="swiper-content">{{$item->attributes->content}}</div>
          </div>
          @endforeach
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.6/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="{{asset('js/member.js')}}"></script>
<script>
  const deleteElements = document.querySelectorAll('.delete-btn');
  const saveElement = document.querySelector('#submit-btn');

  deleteElements.forEach(deleteElement => {
    deleteElement.addEventListener('click', function() {
      Swal.fire({
        title: '是否刪除該景點或店家？',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '刪除',
        cancelButtonText: '取消'
      }).then((result) => {
        if (result.isConfirmed) {
          const productElement = this.parentElement.parentElement;
          let productId = this.getAttribute('data-id');
          let url = '{{ route("journey-cart.delete") }}';
          let formData = new FormData();

          formData.append('_token', '{{csrf_token()}}');
          formData.append('id', productId);

          fetch(url, {
            'method': 'post',
            'body': formData
          }).then(function(response) {
            return response.text();
          }).then(function(data) {
            if (data == 'Success') {
              productElement.remove();
              Swal.fire({
                position: 'top',
                icon: 'success',
                title: '刪除成功！',
                showConfirmButton: false,
                timer: 1500
              });
            }
          });
        }
      });
    });
  });
</script>
@endsection