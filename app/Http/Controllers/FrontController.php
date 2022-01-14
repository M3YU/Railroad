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
        // // $array = ['13','17','25','30'];
        // Attraction::where('id', 13)->get();
        // Attraction::where('id', 17)->get();
        // Attraction::where('id', 25)->get();
        // Attraction::where('id', 30)->get();
        return view('front.attraction.attraction');
    }
    

    function store()
    {
        return view('front.store.store');
    }


}