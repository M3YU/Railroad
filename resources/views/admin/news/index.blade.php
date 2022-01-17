@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    td,
    tr {
        vertical-align: middle;
        text-align: center;
    }
</style>
@endsection

@section('title')
<h3 class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 ">最新消息管理</h3>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card align-middle">

                <div class="card-header" style="background-color: #4e73df;">
                    <a href="{{ route('news.create') }}"
                        style="color: seashell;text-decoration: underline">新增消息點我點我!</a>
                </div>

                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th width="20">Id</th>
                                <th>Title</th>
                                <th width="150">Date</th>
                                <th>Image</th>
                                <th width="140">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)
                            <tr>
                                <td class="align-middle">{{$item->NewsCategory->name}}</td>
                                <td class="align-middle">{{$item->id}}</td>
                                <td class="align-middle">{{$item->title}}</td>
                                <td class="align-middle">{{$item->date}}</td>
                                <td class="align-middle"><img src="{{Storage::url($item->image_url)}}" alt="" width="200" height="100"></td>
                                <td class="align-middle">
                                    <a href="{{route('news.edit', ['news' => $item])}}" class="btn btn-info">Edit</a>
                                    <a type="submit" class="btn btn-danger mr-2 my-1 delete-btn">Delete</a>
                                    <form style="width: 0px; margin: 0;"
                                        action="{{route('news.destroy', ['news' => $item])}}" method="POST">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#my-table').DataTable();
      } );


</script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection