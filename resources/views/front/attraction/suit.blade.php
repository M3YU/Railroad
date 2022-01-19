@extends('layouts.template')

@section('title', '套裝行程')

@section('css')
<link rel="stylesheet" href="{{asset('css/top.css')}}">
<link rel="stylesheet" href="{{asset('css/attraction-suit.css')}}">


<style>
    #top .banner {
        background-size: cover;
        background-position: bottom;
    }

    footer {
        margin-top: 3.5vw;
    }

    .footer-mask {
        bottom: 47%;
        z-index: 1;
    }
</style>
@endsection

@section('main')

<section id="top">
    <div class="title" style="background-image: none">
        揪一起騎________________</div>
    <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
    <div class="slogan">騎車才不會錯過美麗的風景。</div>
    <div class="banner"
        style="background-image: url('{{asset('img/attraction/27-travel.taichung.gov.tw-LoverBridge-2.jpg')}}')"></div>
    <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>


<div class="container">

    <section class="focus">
        <div class="row my-5">
            <div class="col d-flex align-items-baseline title">
                <h1>套裝行程</h1>
            </div>
            <h3 class="subtitle">Special</h3>
        </div>



        @foreach ($suits as $index => $suit)
        @if (($index % 2))
        <div class="suit row">
            <div class="col">
                <div class="sp-img" style="background-image: url({{Storage::url($suit->image_url)}})"></div>
            </div>
            <div class="col">
                <div class="sp-text">
                    <span class="ribbon"></span>
                    <h1>{{$suit->name}}</h1>
                    <h4>懷舊時光</h4>
                    <p>
                        {{$suit->content}}
                    </p>
                    <div class="hashtag">
                        <a class="text-decoration-none" href="#"><span>#茶</span></a>
                        <a class="text-decoration-none" href="#"><span>#復古</span></a>
                        <a class="text-decoration-none" href="#"><span>#柑仔店</span></a>
                        <a class="text-decoration-none" href="#"><span>#歷史</span></a>
                        <a class="text-decoration-none" href="#"><span>#美食</span></a>
                        <a class="text-decoration-none" href="#"><span>#鐵馬道</span></a>
                    </div>
                    <div class="d-flex justify-content-end"><a
                            href="{{route('attractions.content',['id'=> $suit->id])}}">
                            <button class="button-55" role="button">詳細內容</button></a>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="suit row">
            <div class="col">
                <div class="sp-text">
                    <span class="ribbon"></span>
                    <h1>{{$suit->name}}</h1>
                    <h4>懷舊時光</h4>
                    <p>
                        {{$suit->content}}
                    </p>
                    <div class="hashtag">
                        <a class="text-decoration-none" href="#"><span>#茶</span></a>
                        <a class="text-decoration-none" href="#"><span>#復古</span></a>
                        <a class="text-decoration-none" href="#"><span>#柑仔店</span></a>
                        <a class="text-decoration-none" href="#"><span>#歷史</span></a>
                        <a class="text-decoration-none" href="#"><span>#美食</span></a>
                        <a class="text-decoration-none" href="#"><span>#鐵馬道</span></a>
                    </div>
                    <div class="d-flex justify-content-end"><a
                            href="{{route('attractions.content',['id'=> $suit->id])}}">
                            <button class="button-55" role="button">詳細內容</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sp-img" style="background-image: url({{Storage::url($suit->image_url)}})"></div>
            </div>
        </div>
        @endif

        @endforeach


    </section>

</div>


@endsection

@section('footer')
<embed class="footer-mask" src="/img/index/footer用-總和.png" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/attraction.js"></script>

@endsection