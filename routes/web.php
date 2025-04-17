<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);

Route::get('/contact_us', function () {
    return view('contact');
});

Route::get('/about_us', [PageController::class, 'aboutUs']);

Route::get('/service', function () {
    return view('service');
});

Route::get('/project', [PageController::class, 'project']);

Route::get('/project_details/{id}', [PageController::class, 'project_details']);

Route::get('/faq', function () {
    return view('faq');
});
