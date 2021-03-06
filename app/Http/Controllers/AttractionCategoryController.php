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
        $attractionCategories = AttractionCategory::get();

        return view('admin.attraction-category.index',compact('attractionCategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attraction-category.create');
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

        return redirect()->route('attraction_categories.index');
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
        $attractionCategory = AttractionCategory::find($id);

        return view('admin.attraction-category.edit',compact('attractionCategory'));
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

        return redirect()->route('attraction_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $attractionCategory = AttractionCategory::with('attractions')->find($id);
        
        // ???????????????
        if($attractionCategory->attractions->count()){
            return redirect()
            ->route('attraction_categories.index')
            ->with([
                'message'=>$attractionCategory->name.'????????????'.$attractionCategory->attractions->count().'???????????????????????????',
                'color'=>'alert-danger'
            ]);
        }
        
        $attractionCategory->delete();
        return redirect()
        ->route('attraction_categories.index')
        ->with([
            'message'=>'????????????!!',
            'color'=>'alert-success'
        ]);
    }
}
