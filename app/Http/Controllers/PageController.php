<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

class PageController extends Controller
{
    public function home()
    {
        $featured_books = Book::where('featured', 1)->get();

        if(count($featured_books) < 1) {
            $featured_books = Book::all();
        }
        $today = date('Y-m-d');
        $announcement = Announcement::where('start', '<=' ,$today)->where('end', '>=' ,$today)->get();
        // $announcement = Announcement::where('start', '>=' ,$today)->whereDate('end', '<=' ,$today)->get();

        // return $announcement;


        $latest_release = Book::orderBy('id', 'desc')->take(10)->get();

        // return count($featured_books);

        return view('guest.home', compact('featured_books','latest_release','announcement'));

    }
    
    public function series() {
        $collection = Book::where('type', 'series')->where('series_id', 0)->where('author', 1)->get();

        return view('guest.series', compact('collection'));
    }

    public function stand_alone() {
        $collection = Book::where('type', 'stand alone')->where('author', 1)->get();

        return view('guest.standalone', compact('collection'));
    }

    public function guest_writer() {
        // $collection = Book::where('type', 'guest')->get();
        $writers = User::where('accesslevel', 'writer')->get();

        return view('guest.guest_writer', compact('writers'));
    }

    
    public function writer_collection($id) {
        $user = User::find($id);
        $collection_standalone = Book::where('author', $id)->where('type', 'standalone')->get();
        $collection_series = Book::where('author', $id)->where('type', 'series')->get();
        return view('guest.writer_collection', compact('collection_standalone', 'collection_series', 'user'));
    }

}
