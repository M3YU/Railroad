@extends('')


@section('title')
    


@section('css')
<link rel="stylesheet" href="https//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection


@section('main')
<header class="container header">
    <div class="title">
        <img src="./images/icon.svg" alt="">
        <h2>最新消息</h2>
    </div>
    <div class="page-info">
        <div class="calc">
            資料總筆數：<span>42</span>
        </div>
        <div class="calc">
            每頁筆數：<span>10</span>
        </div>
        <div class="calc">
            總頁數：<span>5</span>
        </div>
        <div class="calc">
            目前頁次：<span>1</span>
        </div>
    </div>
</header>
<section class="container cards">
    @foreach ($news as $item)
    <div class="news-card">
        <div class="img" style="background-image: url({{$item->image_url}})"></div>
        <div class="content">
            <span class="tag">最新消息</span>
            <a href="{{asset(''.$item->id)}}">{{$item->title}}</a>
            <span class="date">{{$item->date}}</span>
            <p>{{$item->content}}</p>
        </div>
    </div>
    @endforeach

</section>
@endsection




@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
@endsection