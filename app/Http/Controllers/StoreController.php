<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\StoreImage;
use Illuminate\Http\Request;
use App\Models\StoreCategory;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::with('storeCategory')->get();

        return view('admin.store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storeCategories = StoreCategory::get();
        return view('admin.store.create', compact('storeCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // 判斷主要圖片有沒有上傳
        if ($request->hasFile('image_url')) {
            $path = Storage::put('/store', $request->image_url);
        }

        // 建立商店
        $store = Store::create([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'image_url' => $path,
            'content' => $request->content,
            'phone' => $request->phone,
            'address' => $request->address,
            'category_id' => $request->category_id,
            'distance' => $request->distance,
            'direction' => $request->direction,           
        ]);
        
        // 儲存其他圖片，利用迴圈讀出檔案
        if ($request->hasFile('image_urls')) {
            foreach ($request->image_urls as $image_url) {
                $otherPath = Storage::put('/store', $image_url);

                StoreImage::create([
                    'store_id' => $store->id,
                    'image_url' => $otherPath
                ]);
            }
        }

        return redirect()->route('stores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storeCategories = StoreCategory::get();
        $store = Store::with('storeImage')->find($id);

        return view('admin.store.edit', compact('storeCategories', 'store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        // 判斷是否有上傳新的主要圖片
        if ($request->hasFile('image_url')) {
            // 刪除舊的主要圖片
            Storage::delete($store->image_url);
            // 上傳新圖片
            $path = Storage::put('/store', $request->image_url);
        } else {
            // 沿用舊圖片
            $path = $store->image_url;
        }
        // 更新沿途風景
        $store->update([
            'name' => $request->name,
            'subtitle' => $request->subtitle,
            'image_url' => $path,
            'content' => $request->content,
            'phone' => $request->phone,
            'address' => $request->address,
            'category_id' => $request->category_id,
            'distance' => $request->distance,
            'direction' => $request->direction,
        ]);
        // 判斷是否有上傳新的其他圖片
        if ($request->hasFile('image_urls')) {
            foreach ($request->image_urls as $image_url) {
                $path = Storage::put('/store', $image_url);

                StoreImage::create([
                    'store_id' => $store->id,
                    'image_url' => $path
                ]);
            }
        }

        return redirect()->route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::with('storeImage')->find($id);
        // 刪除主要圖片檔案
        Storage::delete($store->image_url);

        // 利用迴圈將每一張圖片刪除
        foreach ($store->storeImage as $storeImage) {
            // 刪除其他圖片檔案
            Storage::delete($storeImage->image_url);
            // 刪除圖片資料
            $storeImage->delete();
        }
        // 刪除風景資料
        $store->delete();

        return redirect()->route('stores.index');
    }

    public function storeImagesDelete(Request $request)
    {
        
        // 找出對應的其他圖片
        $storeImage = StoreImage::find($request->id);
        // 將圖片檔案刪除
        Storage::delete($storeImage->image_url);
        // 將資料從資料庫移除
        $storeImage->delete();

        return 'success';
    }
}
