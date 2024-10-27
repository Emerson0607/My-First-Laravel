<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    $jobs = Job::all();
    // dd($jobs[0]->title);

    return view('/home', [
        'greetings' => 'Hello!'
    ]);
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => Job::all(),

        'greetings' => 'Hello!'
    ]);
});

Route::get('/jobs/{id}', function ($id)  {

    $job = Job::find($id);
    // dd($job); debugger  

    return view('job', ['job' => $job, 'greetings' => 'Hello!']);
});

Route::get('/contact', function () {
    return view('contact');
});