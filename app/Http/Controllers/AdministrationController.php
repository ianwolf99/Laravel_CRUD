<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administration;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrations = Administration::all();
        return view('administrations.index', compact('administrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'office_location' => 'required|string|max:255',
            'office_hours' => 'required|string|max:255',
            'responsibilities' => 'nullable|string',
            // Add more validation rules as needed
        ]);

        Administration::create($request->all());
        return redirect()->route('administrations.index')->with('success', 'Administration record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Administration $administration)
    {
        return view('administrations.show', compact('administration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administration $administration)
    {
        return view('administrations.edit', compact('administration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Administration $administration)
    {
        $request->validate([
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'office_location' => 'required|string|max:255',
            'office_hours' => 'required|string|max:255',
            'responsibilities' => 'nullable|string',
            // Add more validation rules as needed
        ]);

        $administration->update($request->all());
        return redirect()->route('administrations.index')->with('success', 'Administration record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administration $administration)
    {
        $administration->delete();
        return redirect()->route('administrations.index')->with('success', 'Administration record deleted successfully.');
    }
}
