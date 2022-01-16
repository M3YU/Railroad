<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\AttractionImage;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bike()
    {
        return view('front.bike.bike');
    }

    public function index()
    {
        return view('index');
    }

    public function attraction()
    {
        return view('front.attraction.attraction');
    }
    public function attractionContent($id)
    {
        $attraction = Attraction::find($id);

        $categories = Attraction:: where('category_id',$attraction->category_id)->get();

        $attractionImgs = AttractionImage::where('attraction_id',$id)->get();
        
       
        return view('front.attraction.content',compact('attraction','categories','attractionImgs'));
    }


    function store()
    {
        return view('front.store.store');
    }
}