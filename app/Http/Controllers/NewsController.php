<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('NewsCategory')->orderBy('category_id', 'asc')->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $newsCategories = NewsCategory::get();
        return view('admin.news.create', compact('newsCategories'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image_url')) {
            $path = Storage::put('/news', $request->image_url);
        }
        News::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
            'image_url' => $path
        ]);

        return redirect()->route('news.index');
    }

    public function edit(News $news)
    {
        $newsCategories = NewsCategory::get();
        return view('admin.news.edit', compact('news', 'newsCategories'));
    }

    public function update(Request $request, News $news)
    {
        if ($request->hasFile('image_url')) {
            Storage::delete($news->image_url);
            $path = Storage::put('/news', $request->image_url);
        } else {
            $path = $news->image_url;
        }
        $news->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
            'image_url' => $path
        ]);

        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        Storage::delete($news->image_url);
        $news->delete();
        
        return redirect()->route('news.index');
    }
}
