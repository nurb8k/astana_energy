<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    public function show($id)
    {
       $news = News::findOrFail($id);
       return view('news.show', compact('news'));
    }
}
