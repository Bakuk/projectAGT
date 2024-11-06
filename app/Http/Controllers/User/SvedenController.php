<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Employee;
use App\Models\Organization;
use App\Models\Specialty;
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
        $employees = Employee::all();

        if ($request->ajax()) {
            return view('user.sveden.struct', compact('employees'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.struct', compact('employees'))]);
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

    public function education(Request $request)
    {
        $specialties = Specialty::all();

        $categoryRabPlans = Category::where('name', 'Рабочие учебные планы')->first();

        // Если категория найдена, выбираем документы
        if ($categoryRabPlans) {
            $rabPlansDocuments = $categoryRabPlans->documents; // Получаем только документы этой категории
        } else {
            $rabPlansDocuments = collect(); // Пустая коллекция, если категории нет
        }


        if ($request->ajax()) {
            return view('user.sveden.education', compact('specialties', 'rabPlansDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.education', compact('specialties', 'rabPlansDocuments'))]);
        }
    }

    public function eduStandart(Request $request)
    {

        $categoryFGS = Category::where('name', 'ФГС')->first();

        // Если категория найдена, выбираем документы
        if ($categoryFGS) {
            $fGSDocuments = $categoryFGS->documents; // Получаем только документы этой категории
        } else {
            $fGSDocuments = collect(); // Пустая коллекция, если категории нет
        }


        if ($request->ajax()) {
            return view('user.sveden.eduStandart', compact('fGSDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.eduStandart', compact('fGSDocuments'))]);
        }
    }

    public function employee(Request $request)
    {
        $employees = Employee::all();
        $categoryPed = Category::where('name', 'Педагогический состав')->first();

        // Если категория найдена, выбираем документы
        if ($categoryPed) {
            $pedDocuments = $categoryPed->documents; // Получаем только документы этой категории
        } else {
            $pedDocuments = collect(); // Пустая коллекция, если категории нет
        }


        if ($request->ajax()) {
            return view('user.sveden.employees', compact('employees', 'pedDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.employees', compact('employees', 'pedDocuments'))]);
        }
    }

    public function objects(Request $request)
    {
        $employees = Employee::all();

        if ($request->ajax()) {
            return view('user.sveden.objects', compact('employees'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.objects', compact('employees'))]);
        }
    }

    public function grants(Request $request)
    {
        $categoryGrant = Category::where('name', 'Стипендия')->first();

        // Если категория найдена, выбираем документы
        if ($categoryGrant) {
            $grantDocuments = $categoryGrant->documents; // Получаем только документы этой категории
        } else {
            $grantDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.sveden.grants', compact('grantDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.grants', compact('grantDocuments'))]);
        }
    }

    public function paidEdu(Request $request)
    {
        $categoryPaidEdu = Category::where('name', 'Платные образовательные услуги')->first();

        // Если категория найдена, выбираем документы
        if ($categoryPaidEdu) {
            $paidEduDocuments = $categoryPaidEdu->documents; // Получаем только документы этой категории
        } else {
            $paidEduDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.sveden.paid_edu', compact('paidEduDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.paid_edu', compact('paidEduDocuments'))]);
        }
    }

    public function accesible(Request $request)
    {
        $accesibleCategory = Category::where('name', 'Доступная среда')->first();


        // Если категория найдена, выбираем документы
        if ($accesibleCategory) {
            $accesibleDocuments = $accesibleCategory->documents; // Получаем только документы этой категории
        } else {
            $accesibleDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.sveden.accesible', compact('accesibleDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.accesible', compact('accesibleDocuments'))]);
        }
    }

    public function international(Request $request)
    {
        if ($request->ajax()) {
            return view('user.sveden.international');
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.international')]);
        }
    }

    public function foodEdu(Request $request)
    {

        $categoryFoodEdu = Category::where('name', 'Организация питания в образовательной организации')->first();

        // Если категория найдена, выбираем документы
        if ($categoryFoodEdu) {
            $foodEduDocuments = $categoryFoodEdu->documents; // Получаем только документы этой категории
        } else {
            $foodEduDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.sveden.food_edu', compact('foodEduDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.food_edu', compact('foodEduDocuments'))]);
        }
    }

    public function transferEdu(Request $request)
    {
        if ($request->ajax()) {
            return view('user.sveden.transfer_edu');
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.transfer_edu')]);
        }
    }

    public function budget(Request $request)
    {

        $categoryBudget = Category::where('name', 'Финансово-хозяйственная деятельность')->first();

        // Если категория найдена, выбираем документы
        if ($categoryBudget) {
            $budgetDocuments = $categoryBudget->documents; // Получаем только документы этой категории
        } else {
            $budgetDocuments = collect(); // Пустая коллекция, если категории нет
        }

        if ($request->ajax()) {
            return view('user.sveden.budget', compact('budgetDocuments'));
        } else {
            return view('user.layouts.app', ['content' => view('user.sveden.budget', compact('budgetDocuments'))]);
        }
    }


}
