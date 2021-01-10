<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $featured_books = Book::where('featured', 1)->get();

        if(count($featured_books) < 1) {
            $featured_books = Book::all();
        }

        $latest_release = Book::orderBy('id', 'desc')->take(10)->get();

        // return count($featured_books);

        return view('guest.home', compact('featured_books','latest_release'));

    }
    
    public function series() {
        $collection = Book::where('type', 'series')->get();

        return view('guest.series', compact('collection'));
    }

    public function stand_alone() {
        $collection = Book::where('type', 'stand alone')->get();

        return view('guest.series', compact('collection'));
    }

}
