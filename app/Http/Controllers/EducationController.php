<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::where('user_id', auth()->id())->latest()->get();

        return view('education.index', compact('educations'));
    }

    public function create()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'grade' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $validated['user_id'] = auth()->id();

        Education::create($validated);

        return redirect()->route('education.index')
            ->with('success', 'Education added successfully.');
    }

    public function show(Education $education)
    {
        return view('education.show', compact('education'));
    }

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'grade' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $education->update($validated);

        return redirect()->route('education.index')
            ->with('success', 'Education updated successfully.');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')
            ->with('success', 'Education deleted successfully.');
    }
}
