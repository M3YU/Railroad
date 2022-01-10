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
        $StoreCategories = StoreCategory::get();

        return view('',compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
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

        return redirect()->route('');
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
        $StoreCategory = StoreCategory::find($id);

        return view('',compact(''));

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
        $StoreCategory = StoreCategory::with('')->find($id);
        // 如果有產品
        if($StoreCategory->products->count()){
            return redirect()
            ->route('')
            ->with([
                'message'=>$StoreCategory->name.'類別尚有'.$StoreCategory->Stores->count().'個產品，無法刪除。',
                'color'=>'alert-danger'
            ]);
        }
        
        $StoreCategory->delete();
        return redirect()
        ->route('')
        ->with([
            'message'=>'刪除成功!!',
            'color'=>'alert-success'
        ]);
    }
}
