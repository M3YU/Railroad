@extends('layouts.app')
@section('css')

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=>首頁</a></li>
            <li class="breadcrumb-item"><a href=>景點列表</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增景點</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">景點 - 新增</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('attractions.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="category" class="col-sm-2 col-form-label">類別<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="category">
                                    <option value="" hidden>請選擇類別</option>
                                    @foreach ($attractionCategories as $attractionCategory)
                                    <option value="{{$attractionCategory->id}}">{{$attractionCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">名稱<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-url" class="col-sm-2 col-form-label">主要圖片<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-url" name="image_url"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-urls" class="col-sm-2 col-form-label">其他圖片</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-urls"
                                    name="image_urls[]" multiple>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="content" class="col-sm-2 col-form-label">描述<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="distance" class="col-sm-2 col-form-label">距離(公里)<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="distance" id="distance" rows="5"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="direction" class="col-sm-2 col-form-label">方向<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="direction" id="direction" rows="5"
                                    required></textarea>
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

@endsection