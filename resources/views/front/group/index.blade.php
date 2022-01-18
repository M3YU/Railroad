@extends('layouts.template')

@section('title','揪一起騎')


@section('css')
<link rel="stylesheet" href="{{asset('css/group.css')}}">
<style>

</style>

@section('main')

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
    <div class="teams">
      <a href="">
        <div class="team">
          <div class="team-time">半日遊</div>
          <div class="team-category">美食行</div>
          <div class="team-summary">人數4人 / 后里集合 / 人均30歲 / 不限男女</div>
        </div>
      </a>
      <a href="">
        <div class="team">
          <div class="team-time">半日遊</div>
          <div class="team-category">美食行</div>
          <div class="team-summary">人數4人 / 后里集合 / 人均30歲 / 不限男女</div>
        </div>
      </a>
      <a href="">
        <div class="team">
          <div class="team-time">半日遊</div>
          <div class="team-category">美食行</div>
          <div class="team-summary">人數4人 / 后里集合 / 人均30歲 / 不限男女</div>
        </div>
      </a>
      <a href="">
        <div class="team">
          <div class="team-time">半日遊</div>
          <div class="team-category">美食行</div>
          <div class="team-summary">人數4人 / 后里集合 / 人均30歲 / 不限男女</div>
        </div>
      </a>
      <a href="">
        <div class="team">
          <div class="team-time">半日遊</div>
          <div class="team-category">美食行</div>
          <div class="team-summary">人數4人 / 后里集合 / 人均30歲 / 不限男女</div>
        </div>
      </a>
    </div>
    <form class="team-form inactive" action="{{route('teams.store')}}" method="POST">
      @csrf
      <div class="form-check timing">
        <label for="half-time" class="team-time">半日遊</label>
        <input id="half-time" name="timing" type="radio" value="1" hidden>
        <label for="all-time" class="team-time">全日遊</label>
        <input type="radio" name="timing" id="all-time" value="2" hidden>
      </div>
      <div class="form-check category">
        <label for="history" class="team-category">歷史行</label>
        <input id="history" name="category" type="radio" value="1" hidden>
        <label for="food" class="team-category">美食行</label>
        <input id="food" name="category" type="radio" value="2" hidden>
        <label for="fitness" class="team-category">健身行</label>
        <input id="fitness" name="category" type="radio" value="3" hidden>
        <label for="family" class="team-category">親子行</label>
        <input id="family" name="category" type="radio" value="4" hidden>
        <label for="friend" class="team-category">交友行</label>
        <input id="friend" name="category" type="radio" value="5" hidden>
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
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
      <div class="photo"></div>
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

@endsection