<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class SvedenController extends Controller
{
    public function index()
    {
        return view('user.sveden.index');
    }

    public function loadSection1()
    {
        return view('user.sveden.document');  // Возвращаем Blade-шаблон для Section 1
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
        $documents = Document::all();  // Получаем все документы

        if ($request->ajax()) {
            return view('user.sveden.document', compact('documents'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.document', compact('documents'))]);
        }
    }
}
