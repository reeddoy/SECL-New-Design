<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact_us', function () {
    return view('contact');
});

Route::get('/about_us', [PageController::class, 'aboutUs']);

Route::get('/service', function () {
    return view('service');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/faq', function () {
    return view('faq');
});
