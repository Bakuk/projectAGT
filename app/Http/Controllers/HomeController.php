<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Specialty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Получаем все новости
        $news = News::with('images')->limit(6)->get();

        $specialties = Specialty::with('images')->get();


        // Передаем данные в представление
        return view('user.home', compact('news', 'specialties'));
    }
}
