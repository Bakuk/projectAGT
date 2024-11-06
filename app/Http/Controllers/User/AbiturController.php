<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Specialty;
use Illuminate\Http\Request;

class AbiturController extends Controller
{
    public function index()
    {
        return redirect()->route('user.reception');
    }

    public function reception(Request $request)
    {
        if ($request->ajax()) {
            return view('user.abitur.reception');
        } else {
            return view('user.layouts.app', ['content' => view('user.abitur.reception')]);
        }
    }

    public function admision(Request $request)
    {
        $categoryAdmision = Category::where('name', 'Правила приема')->first();

        // Если категория найдена, выбираем документы
        if ($categoryAdmision) {
            $admisionDocuments = $categoryAdmision->documents; // Получаем только документы этой категории
        } else {
            $admisionDocuments = collect(); // Пустая коллекция, если категории нет
        }


        if ($request->ajax()) {
            return view('user.abitur.admision', compact('admisionDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.abitur.admision', compact('admisionDocuments'))]);
        }
    }

    public function categoty(Request $request)
    {
        $specialties = Specialty::all();


        if ($request->ajax()) {
            return view('user.abitur.speciality', compact('specialties'));
        } else {
            return view('user.layouts.app', ['content' => view('user.abitur.speciality', compact('specialties'))]);
        }
    }

    public function decree(Request $request)
    {
        $categoryDecree = Category::where('name', 'Приказ о зачислении')->first();

        // Если категория найдена, выбираем документы
        if ($categoryDecree) {
            $decreeDocuments = $categoryDecree->documents; // Получаем только документы этой категории
        } else {
            $decreeDocuments = collect(); // Пустая коллекция, если категории нет
        }


        if ($request->ajax()) {
            return view('user.abitur.decree', compact('decreeDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.abitur.decree', compact('decreeDocuments'))]);
        }
    }

    public function history(Request $request)
    {
        if ($request->ajax()) {
            return view('user.abitur.history');
        } else {
            return view('user.layouts.app', ['content' => view('user.abitur.history')]);
        }
    }


}
