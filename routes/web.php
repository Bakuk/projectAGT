<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('about', [MainController::class, 'about'])->name('about');

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

Route::get('home', [HomeController::class, 'index'])->name('home');
