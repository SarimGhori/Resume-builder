<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ResumeProfileController extends Controller
{
    public function create()
    {
        return view('resume-profile.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|max:255',
            'title' => 'nullable|max:255',
            'phone' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'summary' => 'nullable',
            'website' => 'nullable|max:255',
            'github' => 'nullable|max:255',
            'linkedin' => 'nullable|max:255',
        ]);

        $validated['user_id'] = auth()->id();

        Profile::create($validated);

        return redirect()
            ->route('resume-profile.create')
            ->with('success', 'Profile created successfully.');
    }
}