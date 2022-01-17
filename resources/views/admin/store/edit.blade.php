@extends('layouts.app')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
<style>
    .img {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        border: 1px solid #000;
        margin-right: 15px;
        margin-bottom: 15px;
        position: relative;
    }
    .delete-btn {
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: red;
        color: #FFF;
        font-size: 18px;
        font-weight: 600;
        line-height: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
</style>
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">首頁</a></li>
            <li class="breadcrumb-item"><a href="">產品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯產品</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">產品 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('stores.update',['store'=>$store->id])}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row py-2">
                            <label for="category" class="col-sm-2 col-form-label">類別<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="category" required>
                                    <option value="category_id" hidden>請選擇類別</option>
                                    @foreach ($storeCategories as $storeCategory)
                                    <option value="{{$storeCategory->id}}" @if($storeCategory->id == $store->category_id)selected @endif>{{$storeCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">名稱<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{$store->name}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="subtitle" class="col-sm-2 col-form-label">英文名稱<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$store->subtitle}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="phone" class="col-sm-2 col-form-label">電話<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$store->phone}}"
                                    required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row py-2">
                            <label for="image-url" class="col-sm-2 col-form-label">主要圖片</label>
                            <div class="col-sm-10">
                                <img src="{{Storage::url($store->image_url)}}" alt="" width="200">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-url" class="col-sm-2 col-form-label">主要圖片(重新上傳)</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-url"
                                    name="image_url">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row py-2">
                            <label for="image-urls" class="col-sm-2 col-form-label">其他圖片</label>
                            <div class="col-sm-10 row">
                                @foreach ($store->storeImage as $storeImage)
                                <div class="img"
                                    style="background-image: url({{Storage::url($storeImage->image_url)}})">
                                    <div class="delete-btn" data-id="{{$storeImage->id}} " >x</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-urls" class="col-sm-2 col-form-label">其他圖片(上傳)</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-urls"
                                    name="image_urls[]" multiple >
                            </div>
                        </div>
                                                 
                        <div class="form-group row py-2">
                            <label for="distance" class="col-sm-2 col-form-label">距離<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" name="distance" id="distance" rows="5"
                                    required value="{{$store->distance}}">
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="content" class="col-sm-2 col-form-label">描述<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="store-content" rows="5"
                                    required>{{$store->content}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="address" class="col-sm-2 col-form-label">地址<span
                                     class="text-danger">*</span></label>
                              <div class="col-sm-10">
                                 <input class="form-control" name="address" id="address" rows="5"
                                    required value="{{$store->address}}">
                           </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="direction" class="col-sm-2 col-form-label">方向<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" name="direction" id="direction" rows="5"
                                    required value="{{$store->direction}}">
                            </div>
                        </div>



                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">更新</button>
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
<script>
    let deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(function (deleteBtn) {
        deleteBtn.addEventListener('click',function(e){
            // 獲取要刪除的image id
            let imageId = e.target.getAttribute('data-id');
            // 利用JS建立表單
            let formData = new FormData();
            formData.append('_token','{{csrf_token()}}');
            formData.append('_method','delete');
            formData.append('id',imageId);
            // 送出請求至後端刪除檔案及資料
            let url = '{{route('stores.image-delete')}}';
            fetch(url,{
                'method':'post',
                'body':formData
            }).then(function(response) {
                return response.text();
            }).then(function(data) {
                if(data == 'success'){
                    // 刪除畫面上圖片
                    e.target.parentElement.remove();
                }
            });
        });
    });
</script>
@endsection