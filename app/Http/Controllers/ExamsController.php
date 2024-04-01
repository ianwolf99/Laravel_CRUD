<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exams;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exams::all();
        return view('exams.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Exams::create($request -> all());
        return redirect()-> route('exams.index')->with('success', 'Exam created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return('exams.show')
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
