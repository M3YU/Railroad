@extends('layouts.app')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=>首頁</a></li>
            <li class="breadcrumb-item"><a href=>商店管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增產品</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">商店 - 新增</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('stores.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="category" class="col-sm-2 col-form-label">類別<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="store_category_id" id="category">
                                    <option value="" hidden>請選擇類別</option>
                                    @foreach ($storeCategories as $storeCategory)
                                    <option value="{{$storeCategory->id}}">{{$storeCategory->name}}</option>
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
                            <label for="subtitle" class="col-sm-2 col-form-label"><span
                                    class="text-danger">英文名稱</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="phone" class="col-sm-2 col-form-label">電話<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" required>
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
                                <textarea class="form-control" name="content" id="store-content" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="distance" class="col-sm-2 col-form-label">距離<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" name="distance" id="distance" rows="5"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="direction" class="col-sm-2 col-form-label">方向<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" name="direction" id="direction" rows="5"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="address" class="col-sm-2 col-form-label">地址<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" name="address" id="address" rows="5"
                                    required>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
  $('#store-content').summernote();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
@endsection