<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

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
    public function attractionContent(Request $request)
    {
        return view('front.attraction.content');
    }


    function store()
    {
        return view('front.store.store');
    }
}