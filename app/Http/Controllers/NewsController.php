<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function showNews()
    {
        $news = News::orderBy('created_at', 'desc');
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Валидация
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // обязательное поле для обложки
            'additional_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'  // проверка для доп. изображений
        ]);

        // Сохранение новости
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Загрузка и сохранение обложки
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImagePath = $coverImage->store('news_images', 'public');

            $cover = Image::create(['path' => $coverImagePath]);
            $news->images()->attach($cover->id, ['is_cover' => true]); // Устанавливаем обложку
        }

        // Загрузка и сохранение дополнительных изображений
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $imagePath = $image->store('news_images', 'public');
                $img = Image::create(['path' => $imagePath]);
                $news->images()->attach($img->id, ['is_cover' => false]); // Это дополнительные изображения
            }
        }

        return redirect()->route('admin.news.create')->with('success', 'Новость успешно добавлена!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
