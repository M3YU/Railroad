<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Store;
use App\Models\Attraction;
use App\Models\StoreImage;
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
        $foods = Store::where('category_id', 1)->get();
        $souvenirs = Store::where('category_id', 3)->get();
        return view('front.store.index', compact('foods', 'souvenirs'));
    }
    public function storeContent($id)
    {
        $stores = Store::find($id);
        $souvenirs = Store::where('category_id', 3)->get();
        $storeImgs = StoreImage::where('store_id', $id)->limit(3)->get();
        return view('front.store.content',compact('stores','souvenirs','storeImgs'));
    }
    public function news()
    {
        $news = News::with('NewsCategory')->where('category_id', 2)->orderBy('date', 'desc')->limit(3)->get();
        $carRentalInfos = News::with('NewsCategory')->where('category_id', 3)->orderBy('date', 'desc')->limit(3)->get();
        return view('front.news.index', compact('news', 'carRentalInfos'));
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