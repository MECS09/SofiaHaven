<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\PageController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/home', function () {
//     return view('guest.home');
// })->name('home');


Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('guest.aboutme');
})->name('aboutme');

Route::get('/editors-corner', function () {
    return view('guest.editorscorner');
})->name('editorscorner');

// Route::get('/stand-alone', function () {
//     return view('guest.standalone');
// })->name('standalone');

Route::get('/series', [PageController::class, 'series'])->name('series');
Route::get('/stand-alone', [PageController::class, 'stand_alone'])->name('standalone');
// Route::get('/series', function () {
//     return view('guest.series');
// })->name('series');

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



// Route::get('/chapter', function () {
//     return view('guest.single_chapter');
// })->name('single-chapter');


// Route::get('/chapter/{$id}', [ChapterController::class, 'store'])->name('single-chapter');

// Route::resource('story_list', 'StoryController', [
//     'names' => [
//         'index' => 'new_story'
//     ]
// ]);

// Route::get('story_list', [StoryController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    if(auth()->user()->accesslevel=='admin') {
        // if user is not an admin they dont have access to the dashboard instead they will redirected to certain page/view that would be their dashboard
        return view('dashboard');
    }
    else {
        //indicate which view/route should the normal user need to be redirected
        return redirect()->route('home');
    }

})->name('dashboard');



// Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {

//     // return ('admin');
// //     // $user = Auth::user();
    
    
// });

Route::resource('/book', StoryController::class, [
    'names' => [
        'index' => 'book.list',
        'create' => 'book.create',  
        'show' => 'book.show', 
        'edit' => 'book.edit',
        'update' => 'book.update'
    ]
]);

Route::get('/series/list/{id}', [StoryController::class, 'series_list'])->name('book.series_list');


Route::post('/courses/store', [StoryController::class, 'store'])->name('book.store');

Route::resource('/story', ChapterController::class, [
    'names' => [
        'index' => 'chapter.list',
        'create' => 'chapter.create',  
        'show' => 'chapter.show', 
        'edit' => 'chapter.edit',
        'update' => 'chapter.update'
    ]
]);
Route::post('/chapter/store', [ChapterController::class, 'store'])->name('chapter.store');


