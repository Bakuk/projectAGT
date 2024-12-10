<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OrganizasiaController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\AbiturController;
use App\Http\Controllers\User\lecturerController;
use App\Http\Controllers\User\StudentController;
use App\Http\Controllers\User\SvedenController;

use Illuminate\Support\Facades\Route;

/*AUTH*/
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('about', [MainController::class, 'about'])->name('about');

/*ADMIN*/
Route::get('admin/dashboard', [CustomAuthController::class, 'dashboard'])->name('admin/dashboard');
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.news.index');
Route::get('admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
Route::post('admin/news', [NewsController::class, 'store'])->name('admin.news.store');

Route::get('admin/news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
Route::put('admin/news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
Route::delete('admin/news/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');


Route::get('admin/specialties', [SpecialtyController::class, 'index'])->name('admin.specialties.index');
Route::get('admin/specialties/create', [SpecialtyController::class, 'create'])->name('admin.specialties.create');
Route::post('admin/specialties', [SpecialtyController::class, 'store'])->name('admin.specialties.store');

Route::get('admin/specialties/{id}/edit', [SpecialtyController::class, 'edit'])->name('admin.specialties.edit');
Route::put('admin/specialties/{id}', [SpecialtyController::class, 'update'])->name('admin.specialties.update');
Route::delete('admin/specialties/{id}', [SpecialtyController::class, 'destroy'])->name('admin.specialties.destroy');

Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');

Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

Route::get('admin/documents', [DocumentController::class, 'index'])->name('admin.documents.index');
Route::get('admin/documents/create', [DocumentController::class, 'create'])->name('admin.documents.create');
Route::post('admin/documents', [DocumentController::class, 'store'])->name('admin.documents.store');

Route::get('admin/employees', [EmployeesController::class, 'index'])->name('admin.employees.index');
Route::get('admin/employees/create', [EmployeesController::class, 'create'])->name('admin.employees.create');
Route::post('admin/employees', [EmployeesController::class, 'store'])->name('admin.employees.store');

Route::get('admin/employees/{id}/edit', [EmployeesController::class, 'edit'])->name('admin.employees.edit');
Route::put('admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/employees/{id}', [EmployeesController::class, 'destroy'])->name('admin.employees.destroy');

Route::get('/admin/organizasia', [OrganizasiaController::class, 'index'])->name('admin.organizasia.index');
Route::get('admin/organizasia/{id}/edit', [OrganizasiaController::class, 'edit'])->name('admin.organizasia.edit');
Route::put('admin/organizasia/{id}', [OrganizasiaController::class, 'update'])->name('admin.organizasia.update');

Route::put('admin/documents/{id}', [DocumentController::class, 'update'])->name('admin.documents.update');
Route::get('admin/documents/{id}/edit', [DocumentController::class, 'edit'])->name('admin.documents.edit');
Route::delete('admin/documents/{id}', [DocumentController::class, 'destroy'])->name('admin.documents.destroy');


/*USER*/
Route::get('home', [HomeController::class, 'index'])->name('home');

//sveden
Route::get('/sveden/', [SvedenController::class, 'index'])->name('sveden');
Route::get('/sveden/documents/', [SvedenController::class, 'documents'])->name('user.documents');
Route::get('/sveden/struct/', [SvedenController::class, 'struct'])->name('user.struct');
Route::get('/sveden/basics/', [SvedenController::class, 'basicsSveden'])->name('user.basics');
Route::get('/sveden/education/', [SvedenController::class, 'education'])->name('user.education');
Route::get('/sveden/eduStandart/', [SvedenController::class, 'eduStandart'])->name('user.eduStandart');
Route::get('/sveden/employees/', [SvedenController::class, 'employee'])->name('user.employees');
Route::get('/sveden/objects/', [SvedenController::class, 'objects'])->name('user.objects');
Route::get('/sveden/grants/', [SvedenController::class, 'grants'])->name('user.grants');
Route::get('/sveden/paid_edu/', [SvedenController::class, 'paidEdu'])->name('user.paidEdu');
Route::get('/sveden/accesible/', [SvedenController::class, 'accesible'])->name('user.accesible');
Route::get('/sveden/international/', [SvedenController::class, 'international'])->name('user.international');
Route::get('/sveden/food_edu/', [SvedenController::class, 'foodEdu'])->name('user.foodEdu');
Route::get('/sveden/transfer_edu/', [SvedenController::class, 'transferEdu'])->name('user.transferEdu');
Route::get('/sveden/budget/', [SvedenController::class, 'budget'])->name('user.budget');


//abitur
Route::get('/abitur/', [AbiturController::class, 'index'])->name('abitur');
Route::get('/abitur/reception', [AbiturController::class, 'reception'])->name('user.reception');
Route::get('/abitur/admision', [AbiturController::class, 'admision'])->name('user.admision');
Route::get('/abitur/categoty', [AbiturController::class, 'categoty'])->name('user.categoty');
Route::get('/abitur/decree', [AbiturController::class, 'decree'])->name('user.decree');
Route::get('/abitur/history', [AbiturController::class, 'history'])->name('user.history');

//student
Route::get('/student/', [StudentController::class, 'index'])->name('student');
Route::get('/student/schedule', [StudentController::class, 'schedule'])->name('user.schedule');
Route::get('/student/obshhezhitiye', [StudentController::class, 'obshhezhitiye'])->name('user.obshhezhitiye');
Route::get('/student/grantsStudent', [StudentController::class, 'grantsStudent'])->name('user.grantsStudent');
Route::get('/student/section', [StudentController::class, 'section'])->name('user.section');
Route::get('/student/sportClub', [StudentController::class, 'sportClub'])->name('user.sportClub');
Route::get('/student/career', [StudentController::class, 'career'])->name('user.career');

//lecturer

Route::get('/lecturer/', [lecturerController::class, 'index'])->name('student');
Route::get('/lecturer/document', [lecturerController::class, 'document'])->name('user.documentLecture');
/*Route::get('/lecturer/obshhezhitiye', [lecturerController::class, 'obshhezhitiye'])->name('user.obshhezhitiye');
Route::get('/lecturer/grantsStudent', [lecturerController::class, 'grantsStudent'])->name('user.grantsStudent');
Route::get('/lecturer/section', [lecturerController::class, 'section'])->name('user.section');
Route::get('/lecturer/sportClub', [lecturerController::class, 'sportClub'])->name('user.sportClub');
Route::get('/lecturer/career', [lecturerController::class, 'career'])->name('user.career');*/


//news
Route::get('/news/', [\App\Http\Controllers\User\NewsController::class, 'index'])->name('user.news');
Route::get('/news/{id}', [\App\Http\Controllers\User\NewsController::class, 'show'])->name('news.show');

//обратная связь
Route::post('/send-feedback', [FeedbackController::class, 'store']);

//mail
//Route::get('/send-test-email', [MailController::class, 'sendTestEmail']);
Route::get('/sendbasicemail', [MailController::class, 'basic_email']);
Route::get('/sendhtmlemail', [MailController::class, 'html_email']);
Route::get('/sendattachmentemail', [MailController::class, 'attachment_email']);
