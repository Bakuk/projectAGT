<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Organization;
use Illuminate\Http\Request;

class SvedenController extends Controller
{
    public function index()
    {
        //return view('user.sveden.index');
        return redirect()->route('user.basics');
    }

    public function basicsSveden(Request $request)
    {
        $organization = Organization::first();
        if ($request->ajax()) {
            return view('user.sveden.basics', compact('organization'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.basics', compact('organization'))]);
        }
    }

    public function struct(Request $request)
    {
        if ($request->ajax()) {
            return view('user.sveden.struct');
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.struct')]);
        }
    }

    public function documents(Request $request)
    {
        $categoryMainDoc = Category::where('name', 'Основные документы')->first();
        $categoryLocalAct = Category::where('name', 'Локальные акты')->first();

        // Если категория найдена, выбираем документы
        if ($categoryMainDoc) {
            $mainDocuments = $categoryMainDoc->documents; // Получаем только документы этой категории
        } else {
            $mainDocuments = collect(); // Пустая коллекция, если категории нет
        }

        // Если категория найдена, выбираем документы
        if ($categoryLocalAct) {
            $localDocuments = $categoryLocalAct->documents; // Получаем только документы этой категории
        } else {
            $localDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.sveden.document', compact('mainDocuments', 'localDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.document', compact('mainDocuments', 'localDocuments'))]);
        }
    }
}
