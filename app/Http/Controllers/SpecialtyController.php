<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index()
    {
        // Получаем все специальности с их изображениями
        $specialties = Specialty::with('images')->get();

        // Передаем данные в представление
        return view('specialties.index', compact('specialties'));
    }
}
