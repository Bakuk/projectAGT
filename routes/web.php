<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\SvedenController;

use Illuminate\Support\Facades\Route;

//Auth
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('about', [MainController::class, 'about'])->name('about');

//admin
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

Route::put('admin/documents/{id}', [DocumentController::class, 'update'])->name('admin.documents.update');
Route::get('admin/documents/{id}/edit', [DocumentController::class, 'edit'])->name('admin.documents.edit');
Route::delete('admin/documents/{id}', [DocumentController::class, 'destroy'])->name('admin.documents.destroy');


//user
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/sveden/', [SvedenController::class, 'index'])->name('sveden');
Route::get('/sveden/documents/', [SvedenController::class, 'documents'])->name('user.documents');
Route::get('/sveden/struct/', [SvedenController::class, 'struct'])->name('user.struct');

Route::get('/news/', [\App\Http\Controllers\User\NewsController::class, 'index'])->name('user.news');
Route::get('/news/{id}', [\App\Http\Controllers\User\NewsController::class, 'show'])->name('news.show');
