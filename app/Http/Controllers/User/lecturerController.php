<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class lecturerController extends Controller
{
    public function index()
    {
        return redirect()->route('user.documentLecture');
    }

    public function document(Request $request)
    {
        $categoryLect = Category::where('name', 'Документ преподавателя')->first();

        // Если категория найдена, выбираем документы
        if ($categoryLect) {
            $lectDocuments = $categoryLect->documents; // Получаем только документы этой категории
        } else {
            $lectDocuments = collect(); // Пустая коллекция, если категории нет
        }


        if ($request->ajax()) {
            return view('user.lecturer.document', compact('lectDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.lecturer.document', compact('lectDocuments'))]);
        }
    }

}
