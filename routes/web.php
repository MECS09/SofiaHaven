<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//TEMPORARY ROUTE FOR MAINTENANCE *************
Route::get('/', function () {
    return view('maintenance');
})->name('maintenance');

Route::get('/home', function () {
    return view('guest.home');
})->name('home');

Route::get('/about', function () {
    return view('guest.aboutme');
})->name('aboutme');

Route::get('/editors-corner', function () {
    return view('guest.editorscorner');
})->name('editorscorner');

Route::get('/stand-alone', function () {
    return view('guest.standalone');
})->name('standalone');

Route::get('/series', function () {
    return view('guest.series');
})->name('series');

Route::get('/travel-and-leisure', function () {
    return view('guest.travel_and_leisure');
})->name('travel-and-leisure');

Route::get('/events', function () {
    return view('guest.events');
})->name('events');

Route::get('/random-thoughts', function () {
    return view('guest.random_thoughts');
})->name('random-thoughts');


Route::get('/writing-tips', function () {
    return view('guest.writing-tips');
})->name('writing-tips');


Route::get('/how-to-earn', function () {
    return view('guest.how-to-earn');
})->name('how-to-earn');


Route::get('/contact', function () {
    return view('guest.contact');
})->name('contact');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
