<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Models\Job; 
 
Route::get('/', function () { 
    return view('home'); 
}); 
 
Route::get('/jobs', function () { 
    return view('jobs', [ 
        'jobs' => Job::with('employer')->paginate(3) 
    ]); 
}); 
 
Route::get('/job/{job}', function (Job $job) { 
    return view('job', [ 
        'job' => $job 
    ]); 
});

Route::get('/jobs/{id}', function ($id) { 
    return view('job', [ 
        'job' => Job::find($id) 
    ]); 
});