<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/job', function () {
    return view('pages.job');
})->name('job');

Route::get('/job-details', function () {
    return view('pages.job-details');
})->name('job-details');

Route::get('/company-details', function () {
    return view('pages.company-details');
})->name('company-details');

Route::get('/candidate', function () {
    return view('pages.candidate');
})->name('candidate');

Route::get('/candidate-details', function () {
    return view('pages.candidate-details');
})->name('candidate-details');

Route::get('/register', function () {
    return view('pages.registration');
})->name('register');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
