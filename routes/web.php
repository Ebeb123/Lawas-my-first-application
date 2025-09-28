<?php
// routes/web.php - Complete CRUD implementation

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Homepage
Route::get('/', function () {
    return view('home');
});

// Jobs Index - List all jobs
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});

// Show Create Form - MUST come before /jobs/{job}
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store a New Job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1 // Hard-coded for now
    ]);

    return redirect('/jobs');
});

// Show Edit Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update a Job
Route::patch('/jobs/{job}', function (Job $job) {
    // validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // update
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect
    return redirect('/jobs/' . $job->id);
});

// Destroy a Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});

// Show individual job - MUST come last
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});