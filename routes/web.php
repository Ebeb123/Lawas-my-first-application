<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Models\Job; 
 
Route::get('/', function () { 
    return view('home'); 
}); 
 
use App\Http\Controllers\JobController;
Route::resource('jobs', JobController::class);
