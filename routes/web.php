<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserRoleController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route as RoutingRoute;

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
// Route::get('/', function () {
//     return view('maintenance');
// })->name('maintenance');

// Route::get('/home', function () {
//     return view('guest.home');
// })->name('home');


Route::get('/', [PageController::class, 'home'])->name('home');

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
Route::get('/guest-writer', [PageController::class, 'guest_writer'])->name('guestwriter');
Route::get('/guest-writer/{id}', [PageController::class, 'writer_collection'])->name('writer_collection');

Route::get('/travel-and-leisure', [BlogController::class, 'travel_and_leisure'])->name('travel-and-leisure');

Route::get('/how-to-earn', [BlogController::class, 'howtoearn'])->name('how-to-earn');
Route::get('/events', [BlogController::class, 'events'])->name('events');
Route::get('/random-thoughts', [BlogController::class, 'random_thoughts'])->name('random-thoughts');
Route::get('/writing-tips', [BlogController::class, 'writing_tips'])->name('writing-tips');
Route::post('/save_comment', [CommentController::class, 'save_comment'])->name('save_comment');
Route::post('/save_reply', [CommentController::class, 'save_reply'])->name('save_reply');


Route::get('/contact', function () {
    return view('guest.contact');
})->name('contact');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    if(auth()->user()->accesslevel=='admin') {
        // if user is not an admin they dont have access to the dashboard instead they will redirected to certain page/view that would be their dashboard
        return view('dashboard');
    }
    if(auth()->user()->accesslevel=='writer') {
        // if user is not an admin they dont have access to the dashboard instead they will redirected to certain page/view that would be their dashboard
        return view('dashboard');
    }
    else {
        //indicate which view/route should the normal user need to be redirected
        return redirect()->route('home');
    }

})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {

    Route::resource('/blog-post', BlogController::class, [
        'names' => [
            'index' => 'blog.list',
            'create' => 'blog.create',  
            'store' => 'blog.store', 
            'edit' => 'blog.edit',
            'update' => 'blog.update',
        ]
    ]);
    
    Route::get('/blog-post/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::get('/userrole', [UserRoleController::class, 'index'])->name('user.list');
    Route::get('/changetowriter/{id}', [UserRoleController::class, 'changetowriter'])->name('user.changetowriter');
    Route::get('/changetouser/{id}', [UserRoleController::class, 'changetouser'])->name('user.changetouser');
    Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.list');
    Route::get('/announcement_create', [AnnouncementController::class, 'create'])->name('announcement.create');
    Route::post('/announcement_store', [AnnouncementController::class, 'store'])->name('announcement.store');
});

Route::resource('/book', StoryController::class, [
    'names' => [
        'index' => 'book.list',
        'create' => 'book.create',  
        'show' => 'book.show', 
        'edit' => 'book.edit',
        'update' => 'book.update'
    ]
]);
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/series/list/{id}', [StoryController::class, 'series_list'])->name('book.series_list');

Route::get('/book/delete/{id}', [BookController::class, 'destroy'])->name('Book.destroy');

Route::post('/courses/store', [StoryController::class, 'store'])->name('book.store');

Route::resource('/story', ChapterController::class, [
    'names' => [
        'index' => 'chapter.list',
        'create' => 'chapter.create',  
        'show' => 'chapter.show', 
        'edit' => 'chapter.edit',
        'update' => 'chapter.update',
    ]
]);

Route::get('/chapter/delete/{id}', [ChapterController::class, 'destroy'])->name('chapter.destroy');

Route::post('/chapter/store', [ChapterController::class, 'store'])->name('chapter.store');


