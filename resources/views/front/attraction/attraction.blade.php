@extends('layouts.template')

@section('title', '景點')

@section('css')
<link rel="stylesheet" href="{{asset('css/top.css')}}">
<link rel="stylesheet" href="{{asset('css/attraction.css')}}">


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

    a {
        text-decoration: none;
        color: #ffffff;
    }
</style>
@endsection

@section('main')

<section id="top">
    <div class="title" style="background-image: url('none');">
    沿途景點________________</div>
    <embed class="title-mask" src="{{asset('img/index/banner點綴.png')}}" type="">
    <div class="slogan">騎車才不會錯過美麗的風景。</div>
    <div class="banner"
        style="background-image: url('{{asset('img/attraction/27-travel.taichung.gov.tw-LoverBridge-2.jpg')}}')"></div>
    <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>


<div class="container">
    <section class="photos">
        <div class="row mb-5">
            <div class="col d-flex align-items-baseline title">
                <h1>網美拍照地</h1>
            </div>
            <h3 class="subtitle">Photo spot</h3>
        </div>
        <div class="row mb-5">
            <div class="col px-0">
                <div class="site-outer">
                    <div class="site-inner">
                        <section class="container-fluid">
                            <div class="row">
                                <ul class="accordion-group" id="accordion">
                                    <li class="">
                                        <div class="accordion-overlay"></div>
                                        <h3>石岡落羽松</h3>
                                        <section class="hidden-xs">
                                            <article>
                                                <p>色調隨陽光轉換，洋溢北國蕭瑟氛圍</p>
                                            </article>
                                        </section>
                                    </li>
                                    <li class="">
                                        <div class="accordion-overlay"></div>
                                        <h3>公老坪</h3>
                                        <section class="hidden-xs">
                                            <article>
                                                <p>依山而建的景觀餐廳、景觀咖啡廳，乃至丘逢甲紀念公園，都能欣賞臺中絕美夜景。
                                                </p>
                                            </article>
                                        </section>
                                    </li>
                                    <li class="">
                                        <div class="accordion-overlay"></div>
                                        <h3>五分車懷舊公園</h3>
                                        <section class="hidden-xs">
                                            <article>
                                                <p>921後的整治維護，濃濃的復古味</p>
                                            </article>
                                        </section>
                                    </li>
                                    <li class="out">
                                        <div class="accordion-overlay"></div>
                                        <h3>200 days</h3>
                                        <section class="hidden-xs">
                                            <article>
                                                <p>為華興芋仔冰的新生代新品牌</p>
                                            </article>
                                        </section>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="focus">
        <div class="row my-5">
            <div class="col d-flex align-items-baseline title">
                <h1>特別推薦</h1>
            </div>
            <h3 class="subtitle">Special</h3>
        </div>
        <div class="row">
            <div class="col">
                <div class="sp-img"></div>
            </div>
            <div class="col">
                <div class="sp-text">
                    <span class="ribbon"></span>
                    <h1>榮町雜貨店</h1>
                    <h4>懷舊時光</h4>
                    <p>
                        <br>遊歷后豐鐵馬道，必經榮町雜貨店，有漂亮的落羽松，懷舊的場景布置、復古的柑仔店，請您停下腳步休閑一下，喝了再上。
                        <br>店內有天然的膠質愛玉(降膽固醇、促進代謝)，冷冷的天愛玉也可以吃熱的喔！還有芋頭西米露、紅豆牛奶愛玉，也有蔬食簡餐喔。
                    </p>
                    <div class="hashtag">
                        <a class="text-decoration-none" href="#"><span>#茶</span></a>
                        <a class="text-decoration-none" href="#"><span>#復古</span></a>
                        <a class="text-decoration-none" href="#"><span>#柑仔店</span></a>
                        <a class="text-decoration-none" href="#"><span>#歷史</span></a>
                        <a class="text-decoration-none" href="#"><span>#美食</span></a>
                        <a class="text-decoration-none" href="#"><span>#鐵馬道</span></a>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="button-55" role="button" onclick="location.href='{{route('attractions.content', 3)}}'">詳細內容</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="themes">
        <div class="row my-5">
            <div class="col d-flex align-items-baseline title">
                <h1>主題套裝行程</h1>
            </div>
            <h3 class="subtitle">Package itinerary</h3>
        </div>
        <div class="row d-flex">
            <div class="col-xl-4 row-cols-md-1 px-0 theme">

                <div class="col package">
                    <div class="couple"></div>
                    <div class="theme-name"><a href="{{route('attractions.suit', "category_id=3")}}">Couple </a></div>
                </div>

            </div>
            <div class="col-xl-8 col-md-12 row-cols-md-2 d-flex flex-wrap px-0 theme">

                <div class="col package">
                    <div class="nature"></div>
                    <div class="theme-name"><a href="{{route('attractions.suit', "category_id=1")}}">Nature</a></div>
                </div>

                <div
                    class="col-xl-6 col-md-12 col-12 row-cols-xl-2 row-cols-1 d-flex flex-xl-nowrap flex-wrap px-0 theme">

                    <div class="col package">
                        <div class="friend"></div>
                        <div class="theme-name"><a href="{{route('attractions.suit', "category_id=2")}}">Friend</a>
                        </div>
                    </div>


                    <div class="col package">
                        <div class="family"></div>
                        <div class="theme-name"><a href="{{route('attractions.suit' ,"category_id=5")}}">Family</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 d-flex flex-xl-nowrap px-0">
                <div class="col nothing">
                    <div class="bike"></div>
                </div>
            </div>
            <div class="col-xl-8 d-flex flex-xl-nowrap px-0 theme">

                <div class="col package">
                    <div class="history"></div>
                    <div class="theme-name"> <a href="{{route('attractions.suit' ,"category_id=4")}}">History </a></div>
                </div>

            </div>
        </div>
    </section>
    <div style="height: 30vh;"></div>
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