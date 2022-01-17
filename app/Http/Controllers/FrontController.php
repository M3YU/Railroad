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
        $imgs = AttractionImage::inRandomOrder()->take(9)->get();

        return view('index', compact('imgs'));
    }

    public function attraction()
    {
        return view('front.attraction.attraction');
    }
    public function attractionContent($id)
    {
        $attraction = Attraction::find($id);

        $categories = Attraction::where('category_id', $attraction->category_id)->get();

        $attractionImgs = AttractionImage::where('attraction_id', $id)->get();


        return view('front.attraction.content', compact('attraction', 'categories', 'attractionImgs'));
    }


    public function store()
    {
        return view('front.store.index');
    }
    public function storeContent($id)
    {
        return view('front.store.content');
    }
    public function news()
    {
        return view('front.news.index');
    }
    public function teams()
    {
        return view('front.group.index');
    }
    public function service()
    {
        return view('front.service.index');
    }

    public function member()
    {
        return view('front.member.index');
    }
}
