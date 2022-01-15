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
    <embed class="title-mask" src="{{asset('img/top/banner點綴.svg')}}" type="">
    <div class="slogan">騎車才不會錯過美麗的風景。</div>
    <div class="banner"
        style="background-image: url('{{asset('img/attraction/27-travel.taichung.gov.tw-LoverBridge-2.jpg')}}')"></div>
    <embed class="banner-mask" src="{{asset('img/top/banner-mask.png')}}" type="">
</section>

<section id="middle">
    <div class="row title-1">
        <div class="attraction-title">
            <h2>后里馬場</h2>
            <p class="description-text">網美拍照地</p>
        </div>

    </div>
    <div class="container">
        <div class="row ">
            <div class="col-5">
                <div class="attraction-main-img"></div>
            </div>
            <div class="col-7 right">
                <div class="other ">
                    <div class="row ">
                        <div class="attraction-main-title">
                            <h3>后里馬場</h3>
                            <button type="button" class="btn btn-secondary mark-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="attraction-other-img"></div>
                        </div>
                        <div class="col-4">
                            <div class="attraction-other-img"></div>
                        </div>
                        <div class="col-4">
                            <div class="attraction-other-img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5 ">
                <div class="news-title">
                    <h2>后里馬場相關報導</h2>
                    <h3>后里馬場</h3>
                </div>
            </div>
            <div class="col-7 ">
                <div class="row">
                    <div class="news-content">
                        后豐鐵馬道過去是臺鐵的舊山線，亦即停用或廢棄的鐵道，如今改建成自行車道，全長約4.5公里，路段看似短卻有非常多樣化的景觀。
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi blanditiis hic, laudantium,
                        amet
                        quaerat
                        rem quos itaque vitae minima delectus dolorum et veniam dolores fugit error repellendus iste
                        suscipit?
                        Ut
                        nisi excepturi nam nobis quos corrupti maiores beatae officiis quia adipisci itaque dolorum
                        assumenda,
                        tenetur corporis sunt magni, aspernatur a cupiditate quas unde. Itaque tempore suscipit
                        excepturi a quia
                        soluta eveniet sed, repudiandae doloribus reiciendis quaerat perferendis eligendi optio animi
                        perspiciatis
                        dicta maiores veritatis, veniam odio porro impedit adipisci laudantium dolore! Aliquam error,
                        aliquid
                        iusto, similique nisi dolorum dolorem quia consectetur neque labore cumque qui ea dolore
                        reiciendis
                        eveniet culpa magnam necessitatibus repellendus. Rem, odio culpa. Harum, iusto unde qui earum
                        veniam
                        numquam quasi velit explicabo maiores, molestiae neque veritatis sapiente nam magnam placeat!
                        Quod,
                        quibusdam dignissimos dolorum laudantium tempora veritatis cupiditate, aut saepe dolore dolores
                        consectetur facere, repellendus delectus commodi harum nemo nostrum hic enim dolorem! Saepe,
                        ipsum modi?
                        Harum quas consectetur voluptate ducimus at cupiditate ad magnam vero porro, eos exercitationem
                        quisquam
                        alias, aliquam dicta quasi quibusdam sint culpa voluptatibus modi dolorem omnis. Eos perferendis
                        nobis
                        corporis alias soluta inventore in, suscipit quia possimus. Voluptate minus veritatis dolor
                        magnam
                        veniam
                        non, corporis ipsa odio ipsam porro illo omnis?
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
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
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

@endsection

@section('js')

<script src="{{asset('js/attraction-content.js')}}"></script>

@endsection