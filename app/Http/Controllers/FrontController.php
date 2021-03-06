<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use App\Models\Order;
use App\Models\Reply;
use App\Models\Store;
use App\models\Contact;
use App\Models\Attraction;
use App\Models\StoreImage;
use App\Mail\ContactNotify;
use Illuminate\Http\Request;
use App\Models\AttractionImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bikeHf()
    {
        return view('front.bike.bike-hf');
    }

    public function bikeDf()
    {
        return view('front.bike.bike-df');
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

    public function attractionSuit(Request $request)
    {
        $suits = Attraction::where('category_id', $request->category_id)->get();
        return view('front.attraction.suit', compact('suits'));
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
        $store = Store::find($id);
        $souvenirs = Store::where('category_id', 3)->get();
        $storeImgs = StoreImage::where('store_id', $id)->limit(3)->get();
        return view('front.store.content', compact('store', 'souvenirs', 'storeImgs'));
    }

    public function news()
    {
        $news = News::with('NewsCategory')->where('category_id', 2)->orderBy('date', 'desc')->limit(3)->get();
        $carRentalInfos = News::with('NewsCategory')->where('category_id', 3)->orderBy('date', 'desc')->limit(3)->get();
        return view('front.news.index', compact('news', 'carRentalInfos'));
    }

    public function teams()
    {
        $teams = Team::orderBy('date', 'desc')->get();
        $replies = Reply::get();
        $imgs = AttractionImage::inRandomOrder()->take(9)->get();
        return view('front.group.index', compact('teams', 'imgs', 'replies'));
    }

    public function teamStore(Request $request)
    {
        Team::create([
            'name' => $request->name,
            'date' => $request->date,
            'user_id' => Auth::user()->id,
            'content' => $request->content,
            'category_id' => $request->category,
            'timing' => $request->timing,
        ]);
        return redirect()->route('teams');
    }

    public function replies(Request $request)
    {
        Reply::create([
            'user_id' => Auth::user()->id,
            'team_id' => $request->team_id,
            'comment' => $request->comment,
        ]);
        return redirect()->route('teams');
    }

    public function service()
    {
        return view('front.service.index');
    }

    public function contact(Request $request)
    {
        $contact = contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content
        ]);

        $email = 'foraswell@gmail.com';
        Mail::to($email)->send(new ContactNotify($contact));

        return redirect()->route('services');
    }

    public function member()
    {
        $user_id = Auth::user()->id;
        $items = \Cart::getContent()
        ->sortBy([
            fn ($a, $b) => $a['attributes']['direction'] <=> $b['attributes']['direction'],
            fn ($a, $b) => $a['price'] <=> $b['price'],
            ]);
        $orders = Order::where('user_id', '=', $user_id)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('front.member.index', compact('items', 'orders'));
    }
}
