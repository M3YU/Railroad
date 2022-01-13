@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    th,td{
        text-align: center;
        vertical-align: middle;
    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header lh-1 pt-3 pb-2">景點列表</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('attractions.create')}}" class="btn btn-success">新增景點</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="70">類別</th>
                                <th width="100">名稱</th>
                                <th width="300">內容</th>
                                <th width="70">主要圖片</th>
                                <th width="50">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attractions as $attraction)
                                <tr>
                                    <td>{{$attraction->attractionCategory->name}}</td>
                                    <td>{{$attraction->name}}</td>
                                    <td>{{$attraction->content}}</td>
                                    <td><img src="{{Storage::url($attraction->image_url)}}" alt="" width="200" height="150"></td>
                                    <td>
                                        <a href="{{route('attractions.edit',['attraction'=>$attraction->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none" action="{{route('attractions.destroy',['attraction'=>$attraction->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    // 初始化datatable
    $(document).ready( function () {
        $('#my-table').DataTable({
            "order": [],
            language:{
                url: "{{asset('js/datatable-zh.json')}}"
            }
        });
    });
    const deleteElements = document.querySelectorAll('.delete-btn');
    deleteElements.forEach(function(deleteElement){
        deleteElement.addEventListener('click',function () {
            if(confirm('你確定要刪除這筆資料嗎？')){
                this.nextElementSibling.submit();
            }
        });
    });
</script>
@endsection