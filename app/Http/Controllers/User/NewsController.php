<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('user.news.news', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('user.news.show', compact('news'));
    }
}
