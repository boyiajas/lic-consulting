<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

//Route::get('/', function () {
    //return view('welcome');
//}); 

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});
Route::get('/flagship-project', function () {
    return view('pages.flagship-project');
});
Route::get('/project-experience', function () {
    return view('pages.project-experience');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
