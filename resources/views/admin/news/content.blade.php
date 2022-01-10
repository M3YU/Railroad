@extends('')

@section('css')
<style>

</style>
@endsection


@section('main')

<div class="container">
    <h2>{{$news->title}}</h2>
    <div>發布日期：<span>{{$news->date}}</span> 瀏覽次數：<span>174</span></div>
    <hr>
    <p>{{$news->content}}</p>
</div>
@endsection


@section('js')

@endsection