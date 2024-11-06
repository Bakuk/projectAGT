<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return redirect()->route('user.schedule');
    }

    public function schedule(Request $request)
    {
        $categorySchedule = Category::where('name', 'Расписание занятий')->first();

        // Если категория найдена, выбираем документы
        if ($categorySchedule) {
            $scheduleDocuments = $categorySchedule->documents; // Получаем только документы этой категории
        } else {
            $scheduleDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.student.schedule', compact('scheduleDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.student.schedule', compact('scheduleDocuments'))]);
        }

    }

    public function obshhezhitiye(Request $request)
    {
        $categoryObshhezhitiye = Category::where('name', 'Общежитие')->first();

        // Если категория найдена, выбираем документы
        if ($categoryObshhezhitiye) {
            $obshhezhitiyeDocuments = $categoryObshhezhitiye->documents; // Получаем только документы этой категории
        } else {
            $obshhezhitiyeDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.student.obshhezhitiye', compact('obshhezhitiyeDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.student.obshhezhitiye', compact('obshhezhitiyeDocuments'))]);
        }
    }

    public function grantsStudent(Request $request)
    {
        $categoryGrant = Category::where('name', 'Стипендия')->first();

        // Если категория найдена, выбираем документы
        if ($categoryGrant) {
            $grantDocuments = $categoryGrant->documents; // Получаем только документы этой категории
        } else {
            $grantDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.student.grants', compact('grantDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.student.grants', compact('grantDocuments'))]);
        }
    }

    public function section(Request $request)
    {
        $categorySection = Category::where('name', 'Кружки и секции')->first();

        // Если категория найдена, выбираем документы
        if ($categorySection) {
            $sectionDocuments = $categorySection->documents; // Получаем только документы этой категории
        } else {
            $sectionDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.student.section', compact('sectionDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.student.section', compact('sectionDocuments'))]);
        }
    }

    public function sportClub(Request $request)
    {
        $categorySportClub = Category::where('name', 'Спортивный клуб')->first();

        // Если категория найдена, выбираем документы
        if ($categorySportClub) {
            $sportClubDocuments = $categorySportClub->documents; // Получаем только документы этой категории
        } else {
            $sportClubDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.student.sportClub', compact('sportClubDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.student.sportClub', compact('sportClubDocuments'))]);
        }
    }

    public function career(Request $request)
    {
        $categoryCareer = Category::where('name', 'Трудоустройство')->first();

        // Если категория найдена, выбираем документы
        if ($categoryCareer) {
            $careerDocuments = $categoryCareer->documents; // Получаем только документы этой категории
        } else {
            $careerDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.student.career', compact('careerDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.student.career', compact('careerDocuments'))]);
        }
    }

}
