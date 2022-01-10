<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\AttractionImage;
use App\Models\AttractionCategory;
use Illuminate\Support\Facades\Storage;


class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = Attraction::with('attractionCategory')->get();

        return view('admin.attraction.index', compact('attractions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attractionCategories = AttractionCategory::get();
        return view('admin.attraction.create', compact('attractionCategories'));
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
            $path = Storage::put('/attraction', $request->image_url);
        }
        // 建立沿途風景
        $attraction = Attraction::create([
            'name' => $request->name,
            'image_url' => $path,
            'content' => $request->content,
            'category_id' => 1,
            'distance' => $request->distance,
            'direction' => $request->direction,

        ]);

        // 儲存其他圖片，利用迴圈讀出檔案
        if ($request->hasFile('image_urls')) {
            foreach ($request->image_urls as $image_url) {
                $otherPath = Storage::put('/attraction', $image_url);

                AttractionImage::create([
                    'attraction_id' => $attraction->id,
                    'image_url' => $otherPath
                ]);
            }
        }

        return redirect()->route('attractions.index');
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
        $attractionCategories = AttractionCategory::get();
        $attraction = Attraction::with('attractionImages')->find($id);

        return view('admin.attraction.edit', compact('attractionCategories', 'attraction'));
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
        $attraction = Attraction::find($id);
        // 判斷是否有上傳新的主要圖片
        if ($request->hasFile('image_url')) {
            // 刪除舊的主要圖片
            Storage::delete($attraction->image_url);
            // 上傳新圖片
            $path = Storage::put('/attraction', $request->image_url);
        } else {
            // 沿用舊圖片
            $path = $attraction->image_url;
        }
        // 更新沿途風景
        $attraction->update([
            'name' => $request->name,
            'image_url' => $path,
            'content' => $request->content,
            'category_id' => 1,
            'distance' => $request->distance,
            'direction' => $request->direction,
        ]);
        // 判斷是否有上傳新的其他圖片
        if ($request->hasFile('image_urls')) {
            foreach ($request->image_urls as $image_url) {
                $path = Storage::put('/attraction', $image_url);

                AttractionImage::create([
                    'attraction_id' => $attraction->id,
                    'image_url' => $path
                ]);
            }
        }

        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attraction = Attraction::with('attractionImages')->find($id);
        // 刪除主要圖片檔案
        Storage::delete($attraction->image_url);

        // 利用迴圈將每一張圖片刪除
        foreach ($attraction->attractionImage as $attractionImage) {
            // 刪除其他圖片檔案
            Storage::delete($attractionImage->image_url);
            // 刪除圖片資料
            $attractionImage->delete();
        }
        // 刪除風景資料
        $attraction->delete();

        return redirect()->route('');
    }

    public function imageDelete(Request $request)
    {
        // 找出對應的其他圖片
        $attractionImage = AttractionImage::find($request->id);
        // 將圖片檔案刪除
        Storage::delete($attractionImage->image_url);
        // 將資料從資料庫移除
        $attractionImage->delete();

        return 'success';
    }
}
