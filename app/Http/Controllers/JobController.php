<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
   public function index()
{
    $jobs = \App\Models\Job::latest()->paginate(10);
    return view('jobs.index', ['jobs' => $jobs]);
}


    // Show create form
    public function create()
    {
        return view('jobs.create');
    }

    // Store new job
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
        ]);

        $job = Job::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'employer_id' => 1, // temporary fallback if not linked to login
        ]);

        return redirect('/jobs')->with('success', 'Job created successfully!');
    }

    // Show single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show edit form
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update job
    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
        ]);

        $job->update($validated);

        return redirect('/jobs/' . $job->id)->with('success', 'Job updated successfully!');
    }

    // Delete job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs')->with('success', 'Job deleted successfully!');
    }
}
