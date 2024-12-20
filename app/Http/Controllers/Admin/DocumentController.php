<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;


class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all(); // Fetch all categories for the dropdown
        $query = Document::query(); // Start a query builder instance

        // Apply filter if a category is selected
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $documents = $query->paginate(10); // Adjust the pagination as needed
        //$documents = Document::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.documents.index', compact('documents', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.documents.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'document' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:51200',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/documents'), $filePath);

            Document::create([
                'title' => $request->title,
                'file_path' => $filePath,
                'category_id' => $request->category_id,
            ]);

            return redirect()->route('admin.documents.index')->with('success', 'Документ успешно загружен.');
        }

        return back()->with('error', 'Ошибка при загрузке документа.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Находим документ с его категорией по id
        $document = Document::with('category')->findOrFail($id);

        // Получаем все категории для выбора в форме
        $categories = Category::all();

        // Возвращаем представление с документом и категориями
        return view('admin.documents.edit', compact('document', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Найти документ по его id
        $document = Document::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'category_id' => 'required|exists:categories,id',
            'document' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|max:51200',
        ]);


        // Проверка, если был загружен новый файл
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filePath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/documents'), $filePath);

            // Удаление старого файла (если требуется)
            if (file_exists(public_path('uploads/documents/' . $document->file_path))) {
                unlink(public_path('uploads/documents/' . $document->file_path));
            }

            $document->file_path = $filePath; // Обновление пути файла
        }

        // Обновление остальных полей
        $document->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
        ]);


        return redirect()->route('admin.documents.index')->with('success', 'Документ успешно обновлен.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $document = Document::findOrFail($id);

        $document->delete();

        return redirect()->route('admin.documents.index')->with('success', 'Документ успешно удален!');
    }
}
