<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function edit($id)
    {
        // Загружаем новость с обложкой и дополнительными изображениями
        $news = News::with('images')->findOrFail($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Валидация
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // обложка необязательна при редактировании
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'  // доп. изображения
        ]);

        // Находим новость
        $news = News::findOrFail($id);

        // Обновляем основные данные новости
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Проверка и обновление обложки
        if ($request->hasFile('cover_image')) {
            // Удаляем старую обложку, если есть
            $coverImage = $news->images()->wherePivot('is_cover', true)->first();
            if ($coverImage) {
                Storage::delete('public/' . $coverImage->path); // Удаляем файл
                $news->images()->detach($coverImage->id); // Убираем связь
            }

            // Сохраняем новую обложку
            $newCoverImage = $request->file('cover_image');
            $coverImagePath = $newCoverImage->store('news_images', 'public');
            $cover = Image::create(['path' => $coverImagePath]);
            $news->images()->attach($cover->id, ['is_cover' => true]); // Привязываем новую обложку
        }

        // Обновление дополнительных изображений (добавление новых)
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $image) {
                $imagePath = $image->store('news_images', 'public');
                $img = Image::create(['path' => $imagePath]);
                $news->images()->attach($img->id, ['is_cover' => false]); // Привязываем дополнительные изображения
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Удаление связанных изображений
        foreach ($news->images as $image) {
            // Удаляем файл изображения из storage
            Storage::disk('public')->delete($image->path);

            // Удаляем запись об изображении из базы данных
            $image->delete();
        }

        // Удаляем новость
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Новость успешно удалена!');
    }
}
