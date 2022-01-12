@extends('layouts.app')
@section('css')

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">首頁</a></li>
            <li class="breadcrumb-item"><a href="">最新消息管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增消息</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">聯絡我們</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('contact.mail') }}">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">姓名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="phone" class="col-sm-2 col-form-label">電話</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="email" class="col-sm-2 col-form-label">電子信箱</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="content" class="col-sm-2 col-form-label">內容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')