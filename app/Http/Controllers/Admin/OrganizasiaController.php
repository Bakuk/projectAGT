<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizasiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $organization = Organization::first();
        return view('admin.organizasia.index', compact('organization'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $organization = Organization::first();

        return view('admin.organizasia.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'abbreviated' => 'required|string|max:255',
            'date_create' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'filialy' => 'required|string|max:255',
            'representation' => 'required|string|max:255',
            'work_schedule' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'fax' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        // Поиск специальности по ID
        $organization = Organization::findOrFail($id);

        // Обновление данных
        $organization->update([
            'full_name' => $validatedData['full_name'],
            'abbreviated' => $validatedData['abbreviated'],
            'date_create' => $validatedData['date_create'],
            'address' => $validatedData['address'],
            'filialy' => $validatedData['filialy'],
            'representation' => $validatedData['representation'],
            'work_schedule' => $validatedData['work_schedule'],
            'phone' => $validatedData['phone'],
            'fax' => $validatedData['fax'],
            'email' => $validatedData['email'],
        ]);



        return redirect()->route('admin.organizasia.index')->with('success', 'Данные успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
