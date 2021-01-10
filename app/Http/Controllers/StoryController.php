<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Book_story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');

        // if (Auth::user()->accesslevel!='admin') {
        //     return redirect()->route('home');
        // }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        
        
        return view('writer.story-list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Book::where('type', 'series')->get();
        return view('writer.create-book', compact('series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'book-title' => 'required',
            'book_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
        ]);
        
        
        
        $coverimage = $_FILES['book_cover']['name'] .'_'. auth()->user()->id  .'_'. time().'.'.$request->book_cover->extension();  
        $request->book_cover->move(public_path('img/book-cover'), $coverimage);
     
        $book = new Book();
        $book->title = $request->input('book-title');
        $book->cover = $coverimage;
        if($request->input('featured') == 'on') {
            $book->featured = 1;
        }
        $book->author = auth()->user()->id;
        $book->rated = $request->input('book-audience-rate');
        $book->privacy = $request->input('book-status');
        $book->description = $request->input('book-description');
        $book->genre = $request->input('book-genre');
        $book->type = $request->input('book-type');

        
        if($request->input('book-type') == 'series') {
            
            $book->series_id = $request->input('series-id');
            
            if($book->series_id == 0) {
                $series_title = null;
            }
            else {
                $id =  $request->input('series-id');
                $series = Book::where('id', $id)->first();
                $series_title = $series->title;
            }
            $book->series_title = $series_title;
        }
        
        
        $book->save();

        return redirect()->route('book.list')->with('success', 'Story Added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        // return $book->title;

        $chapter = Book_story::where('story_id', $id)->orderBy('created_at','asc')->get();
        return view('guest.story_details', compact('book','chapter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        
        $series = Book::where('type', 'series')->get();
        return view('writer.edit-book', compact('book','series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'book-title' => 'required',
        ]);

        // $this->validate($request,[
        //     'book_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
        // ]);

        // if ($request->input('book_cover') : !null) {
            
        //     return 'Walang cover';
        // }
        // else {
        //     return 'May cover';

        // }
        
     
        $book = Book::find($id);
        $book->title = $request->input('book-title');
        
        if($request->has('book_cover')){
            $this->validate($request,[
                'book_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
            ]);
            $coverimage = $_FILES['book_cover']['name'] .'_'. auth()->user()->id .'_'. time().'.'.$request->book_cover->extension();  
            $request->book_cover->move(public_path('img/book-cover'), $coverimage);

            $book->cover = $coverimage;

        }
        if($request->input('featured') == 'on') {
            $book->featured = 1;
        }
        $book->author = auth()->user()->id;
        $book->rated = $request->input('book-audience-rate');
        $book->privacy = $request->input('book-status');
        $book->description = $request->input('book-description');
        $book->genre = $request->input('book-genre');
        $book->type = $request->input('book-type');

        if($request->input('book-type') == 'series') {
            
            $book->series_id = $request->input('series-id');
            
            if($book->series_id == 0) {
                $series_title = null;
            }
            else {
                $id =  $request->input('series-id');
                $series = Book::where('id', $id)->first();
                $series_title = $series->title;
            }
            $book->series_title = $series_title;
        }
        else {
            $book->series_title = null;
            $book->series_id = null;

        }
        $book->save();

        return redirect()->route('book.list')->with('success', 'Story Added');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function series_list($id)
    {
        $book = Book::find($id);
        $collection = Book::where('series_id', $id)->get();
        return view('guest.series_list',compact('collection','book'));
    }
    
}
