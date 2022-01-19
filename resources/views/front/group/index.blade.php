@extends('layouts.template')

@section('title','揪一起騎')


@section('css')
<link rel="stylesheet" href="{{asset('css/group.css')}}">
<style>
  .team-summary:hover {
    color: #121d05;
  }

  input[type="radio"]:checked+span {
    color: #b1e086;
  }

  .detail-content {
    border: 1px solid;
    border-radius: 0.3125vw;
    width: 100%;
    padding: 0.78125vw;
    margin: 0.2604vw 0 1.042vw;
  }

  .detail-content textarea {
    width: 100%;
  }

  .team-detail {
    width: 37.5vw;
    margin-top: 30px;
  }
</style>

@section('main')

@php
use App\Models\Team;
@endphp

<section id="top">
  <div class="title">揪一起騎________________</div>
  <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
  <div class="slogan">騎車才不會錯過美麗的風景。</div>
  <div class="banner" style="background-image: url('{{asset('img/group/06-flickr.jpg')}}')">
  </div>
  <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>

<section id="middle">
  <div class="team-wall">
    <div class="float-title">在線行程</div>
    <div class="titles">
      <div class="title">在線行程</div>
      <div class="title">建立行程</div>
      <div class="title">行程細節</div>
    </div>
    <div class="teams swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach ($teams as $team)

        <div class="team swiper-slide" data-id="{{$team->id}}">
          <div class="team-time">{{Team::TIMING[$team->timing]}}</div>
          <div class="team-category">{{Team::CATEGORY[$team->category_id]}}</div>
          <div class="team-summary">人數4人 / {{$team->name}} / {{$team->date}} </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <form class="team-form inactive" action="{{route('teams.store')}}" method="POST">
      @csrf
      <div class="form-check timing">
        <label for="half-time" class="team-time">
          <input id="half-time" name="timing" type="radio" value="0" hidden>
          <span>半日遊</span>
        </label>
        <label for="all-time" class="team-time">
          <input type="radio" name="timing" id="all-time" value="1" hidden>
          <span>全日遊</span>
        </label>
      </div>
      <div class="form-check category">
        <label for="history" class="team-category">
          <input id="history" name="category" type="radio" value="0" hidden>
          <span>歷史行</span>
        </label>
        <label for="food" class="team-category">
          <input id="food" name="category" type="radio" value="1" hidden>
          <span>美食行</span>
        </label>
        <label for="fitness" class="team-category">
          <input id="fitness" name="category" type="radio" value="2" hidden>
          <span>健身行</span>
        </label>
        <label for="family" class="team-category">
          <input id="family" name="category" type="radio" value="3" hidden>
          <span>親子行</span>
        </label>
        <label for="friend" class="team-category">
          <input id="friend" name="category" type="radio" value="4" hidden>
          <span>交友行</span>
        </label>
      </div>
      <div class="form-check name">
        <label for="name" class="team-name">團名 :</label>
        <input id="name" name="name" type="text" placeholder="請輸入您想要的團名">
      </div>
      <div class="form-check name">
        <label for="name" class="team-name">時間 :</label>
        <input id="date" name="date" type="date">
      </div>
      <div class="form-check content">
        <label for="content" class="team-content">行程內容 :</label>
        <textarea name="content" id="content"></textarea>
      </div>
      <button type="submit" class="submit">新增行程</button>
    </form>
    <div class="team-detail inactive">
      @foreach ($teams as $team)
      <div class="detail inactive">
        <div class="team " data-id="{{$team->id}}">
          <div class="team-time">{{Team::TIMING[$team->timing]}}</div>
          <div class="team-category">{{Team::CATEGORY[$team->category_id]}}</div>
          <div class="team-summary">人數4人 / {{$team->name}} / {{$team->date}} </div>
        </div>
        <div style="max-height: 45vw; overflow:auto;">
          <span>{{$team->user->name}} : </span>
          <div class="detail-content">{{$team->content}}</div>
          @foreach ($replies as $reply)
          @if ($reply->team_id == $team->id)
          <span>{{$reply->user->name}} : </span>
          <span style="display: inline-block;margin-left: 13.5vw;">{{$reply->created_at}}</span>
          <div class="detail-content">{{$reply->comment}}</div>
          @endif
          @endforeach
        </div>
        <form action="{{route('replies')}}" method="POST" class="detail-content">
          @csrf
          <input type="text" name="team_id" value="{{$team->id}}" hidden>
          <textarea class="" name="comment"></textarea>
          <button type="submit" class="submit">回覆</button>
        </form>
      </div>
      @endforeach

    </div>
  </div>
</section>

<section id="bottom">
  <embed class="photo-wall-mask" src="{{asset('img/group/照片牆用-1.png')}}" type="">
  <div class="photo-wall-background"></div>
  <div id="photo" class="photo-wall">

    <div class="photo-wall-title">相片牆</div>
    <embed class="photo-wall-title-mask" src="{{asset('img/group/照片牆用-2.png')}}" type="">
    <ul class="photo-wall-categories">
      <li class="photo-wall-category">All</li>
      <li class="photo-wall-category">Animation</li>
      <li class="photo-wall-category">Videos</li>
      <li class="photo-wall-category">Photo</li>
      <li class="photo-wall-category">Movie</li>
    </ul>

    <div class="photos">
      @foreach ($imgs as $img)
      <div class="photo" style="background-image: url({{Storage::url($img->image_url)}});"
        onclick="location.href='{{route('attractions.content', $img->attraction_id)}}'">
      </div>
      @endforeach


    </div>

  </div>


</section>

@endsection

@section('footer')
<embed class="footer-mask" src="{{asset('img/index/footer用-總和.png')}}" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">
@endsection

@section('js')
<script src="{{asset('js/group.js')}}"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
        direction: "vertical",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
@endsection