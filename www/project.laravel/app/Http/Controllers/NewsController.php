<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function showFormForCreate()
    {
        $categories = Category::all('id','name');
        return view('news.create', compact('categories'));
    }

    public function create(Request $request){
        $valid = $request->validate([
            'title' => 'required|min:4|max:100',
            'description' => 'required|min:20|max:300'
        ]);

        $news = new News();
        $news->category_id = $request->input('category_id');
        $news->title = $request->input('title');
        $news->description = $request->input('description');

        $news->save();

        return redirect()->route('news.showFormForCreate');
    }
}
