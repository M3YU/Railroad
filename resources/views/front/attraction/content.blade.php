@extends('layouts.template')

@section('title','景點詳細')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{asset('css/top.css')}}">
<link rel="stylesheet" href="{{asset('css/attraction-content.css')}}">
<style>
    #top .banner {
        background-size: cover;
        background-position: bottom;
    }

    .swiper-slide {
        background-position: center;
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
    <div class="title" style="background-image: none">揪一起騎________________</div>
    <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
    <div class="slogan">騎車才不會錯過美麗的風景。</div>
    <div class="banner" style="background-image: url('{{asset('img/attraction/27-travel.taichung.gov.tw-LoverBridge-2.jpg')}}')"></div>
    <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>

<section id="middle">
    <div class="row title-1">
        <div class="attraction-title">
            <h2>{{$attraction->name}}</h2>
            <p class="description-text">網美拍照地</p>
        </div>

    </div>
    <div class="container">
        <div class="row ">
            <div class="col-5">
                <div class="attraction-main-img" style="background-image: url({{Storage::url($attraction->image_url)}})"></div>
            </div>
            <div class="col-7 right">
                <div class="other ">
                    <div class="row ">
                        <div class="attraction-main-title">
                            <h3>{{$attraction->name}}</h3>
                            <button type="button" class="btn btn-secondary mark-btn add-cart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($attractionImgs as $index => $attractionImg)
                            @if ( $index < 3) <div class="col-4">
                                <div class="attraction-other-img"
                                    style="background-image: url('{{Storage::url($attractionImg->image_url)}}')"></div>
                                </div>
                            @endif
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5 ">
                <div class="news-title">
                    <h2>{{$attraction->name}}相關報導</h2>
                    <h3>{{$attraction->name}}</h3>
                </div>
            </div>
            <div class="col-7 ">
                <div class="row">
                    <div class="news-content">
                        {{$attraction->content}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="attraction-title">
        <h2>其他景點</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="other-attractions">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($categories as $category)
                        <div class="swiper-slide" style="background-image: url('{{Storage::url($category->image_url)}}')"></div>
                        @endforeach


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('footer')
<embed class="footer-mask" src="/img/index/footer用-總和.png" type="">
<embed class="grass" src="{{asset('img/index/footer草叢.png')}}" type="">

@endsection

@section('js')
<script src="{{asset('js/attraction-content.js')}}"></script>

@endsection