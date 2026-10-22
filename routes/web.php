<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Array example
//Route::get('/jobs', function () {
//    return view('jobs', [
//        'title'=> 'These are Available Jobs'
//    ]);
//});

//with() example
//Route::get('/jobs', function () {
//    $title = "Available Jobs";
//    $jobs = [
//        'Software Engineering',
//        'Web Developer',
//        'Data Scientist'
//    ];
//
//    return view('jobs')
//        -> with('title', $title)
//        -> with('jobs', $jobs);
//});

//compact() example
//Route::get('/jobs', function () {
//    $title = "Available Jobs";
//    $jobs = [
//        'Software Engineering',
//        'Web Developer',
//        'Data Scientist',
//        'Data Analyst'
//    ];
//
//    return view('jobs.index',
//        compact('title', 'jobs'))
//        ;
//});

//Examples with custom Controller methods
//Route::get('/jobs',
//    [JobController::class, 'index']);
//Route::get('/jobs/create',
//    [JobController::class,'create']);
//Route::get('/jobs/{id}',
//    [JobController::class, 'show']);
//Route::post('/jobs', [JobController::class, 'store']);

//Custom method example
//Route::get('/jobs/save', [JobController::class, 'save']);

Route::get('/', [HomeController::class, 'index']);

Route::resource('jobs', JobController::class);
