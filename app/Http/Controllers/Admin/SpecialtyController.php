<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpecialtyController extends Controller
{
    public function index()
    {
        // Получаем все специальности
        $specialties = Specialty::all();

        // Возвращение их в представление
        return view('admin.specialties.index', compact('specialties'));
    }

    public function create()
    {

        return view('admin.specialties.create');
    }

    public function store(Request $request)
    {

        // Валидация
        $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'form_of_educate' => 'required|string|max:255',
            'srok_of_educate' => 'required|string|max:255',
            'na_baze' => 'required|string|max:255',
            /*'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',*/// обязательное поле для обложки
        ]);


        // Сохранение новости
        $specialties = Specialty::create([
            'code' => $request->code,
            'name' => $request->name,
            'form_of_educate' => $request->form_of_educate,
            'srok_of_educate' => $request->srok_of_educate,
            'na_baze' => $request->na_baze,
        ]);


        // Загрузка и сохранение обложки
        if ($request->hasFile('image')) {
            $coverImage = $request->file('image');
            $coverImagePath = $coverImage->store('images', 'public');

            $cover = Image::create(['path' => $coverImagePath]);
            $specialties->images()->attach($cover->id); // Устанавливаем обложку
        }


        return redirect()->route('admin.specialties.index')->with('success', 'Специальность успешно добавлена!');
    }

    public function edit($id)
    {
        // Загружаем новость с обложкой и дополнительными изображениями
        $specialty= Specialty::with('images')->findOrFail($id);

        return view('admin.specialties.edit', compact('specialty'));
    }

    public function update(Request $request, $id)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'form_of_educate' => 'required|string|max:255',
            'srok_of_educate' => 'required|string|max:255',
            'na_baze' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // можно оставить пустым при обновлении
        ]);

        // Поиск специальности по ID
        $specialty = Specialty::findOrFail($id);

        // Обновление данных специальности
        $specialty->update([
            'code' => $validatedData['code'],
            'name' => $validatedData['name'],
            'form_of_educate' => $validatedData['form_of_educate'],
            'srok_of_educate' => $validatedData['srok_of_educate'],
            'na_baze' => $validatedData['na_baze'],
        ]);

        // Обновление изображения, если оно есть
        if ($request->hasFile('image')) {
            // Удаление старого изображения (если необходимо)
            if ($specialty->images()->exists()) {
                $oldImage = $specialty->images()->first();

                Storage::disk('public')->delete($oldImage->path); // удаление старого файла
                $specialty->images()->detach($oldImage->id); // удаление связи
                $oldImage->delete(); // удаление записи в БД

            }

            // Сохранение нового изображения
            $coverImage = $request->file('image');
            $coverImagePath = $coverImage->store('images', 'public');

            $cover = Image::create(['path' => $coverImagePath]);
            $specialty->images()->attach($cover->id); // прикрепляем новое изображение
        }

        return redirect()->route('admin.specialties.index')->with('success', 'Специальность успешно обновлена');
    }

    // Удаление специальности
    public function destroy($id)
    {
        $specialty = Specialty::findOrFail($id);

        // Удаление связанных изображений
        foreach ($specialty->images as $image) {
            // Удаляем файл изображения из storage
            Storage::disk('public')->delete($image->path);

            // Удаляем запись об изображении из базы данных
            $image->delete();
        }

        // Удаляем специальность
        $specialty->delete();

        return redirect()->route('admin.specialties.index')->with('success', 'Специальность успешно удалена!');
    }
}
