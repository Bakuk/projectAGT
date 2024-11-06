<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'possition' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        Employee::create([
            'full_name' => $request->full_name,
            'possition' => $request->possition,
            'address' => $request->address,
            'email' => $request->email,
        ]);


        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee= Employee::findOrFail($id);

        return view('admin.employees.edit', compact('employee'));
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
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('admin.employees.index')->with('success', 'Сотрудник успешно удален!');
    }
}
