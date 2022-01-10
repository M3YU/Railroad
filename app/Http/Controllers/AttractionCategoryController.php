<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttractionCategory;

class AttractionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AttractionCategories = AttractionCategory::get();

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
        AttractionCategory::create($request->all());

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
        $AttractionCategory = AttractionCategory::find($id);

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
        AttractionCategory::find($id)->update($request->all());

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
        $AttractionCategory = AttractionCategory::with('')->find($id);
        // 如果有產品
        if($AttractionCategory->products->count()){
            return redirect()
            ->route('')
            ->with([
                'message'=>$AttractionCategory->name.'類別尚有'.$AttractionCategory->Attractions->count().'個產品，無法刪除。',
                'color'=>'alert-danger'
            ]);
        }
        
        $AttractionCategory->delete();
        return redirect()
        ->route('')
        ->with([
            'message'=>'刪除成功!!',
            'color'=>'alert-success'
        ]);
    }
}
