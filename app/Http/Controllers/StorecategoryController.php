<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreCategory;

class StoreCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeCategories = StoreCategory::get();

        return view('admin.store-category.index',compact('storeCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StoreCategory::create($request->all());

        return redirect()->route('store_categories.index');
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
        $storeCategory = StoreCategory::find($id);

        return view('admin.store-category.edit',compact('storeCategory'));

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
        StoreCategory::find($id)->update($request->all());

        return redirect()->route('store_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $storeCategory = StoreCategory::with('stores')->find($id);
        // 如果有產品
        if($storeCategory->stores->count()){
            return redirect()
            ->route('store_categories.index')
            ->with([
                'message'=>$storeCategory->name.'類別尚有'.$storeCategory->Stores->count().'個產品，無法刪除。',
                'color'=>'alert-danger'
            ]);
        }
        
        $storeCategory->delete();
        return redirect()
        ->route('store_categories.index')
        ->with([
            'message'=>'刪除成功!!',
            'color'=>'alert-success'
        ]);
    }
}
