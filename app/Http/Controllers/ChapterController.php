<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Book_story;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $book_id = $request->input('book_id');
        $book_title = $request->input('book_title');
        $book = Book::where('id', $book_id)->first();
        // $books = Book::all();
        // $chapter = Book_story::all();

        return $book;
        // if($book_title == $book->title) {
        //     $chapter = Book_story::where('story_id', $book->id)->get();
        //     return view('guest.story_details',compact('chapter','book'));
        // }

        // return redirect()->back()->with('error', 'data did not match'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return 123;
        $book_id = $request->input('book_id');
        $book_title = $request->input('book_title');
        $book = Book::where('id', $book_id)->first();


        if($book_title == $book->title) {
            $chapter = Book_story::where('story_id', $book->id)->get();
            return view('writer.create-chapter',compact('chapter','book'));
        }

        return redirect()->back()->with('error', 'data did not match'); 
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
            'chapter-title' => 'required'
        ]);
        
        
        

        
     

        $book_story = new Book_story;
        $book_story->story_id = $request->input('story_id');
        $book_story->story_name = $request->input('story_name');
        $book_story->chapter = $request->input('chapter-title');
        if($request->input('chapter_cover') == !null) {
            $chapterimage = $_FILES['chapter_cover']['name'] .'_'. auth()->user()->id .'_'. time().'.'.$request->chapter_cover->extension();  
            $request->chapter_cover->move(public_path('img/book-cover/chapter_cover'), $chapterimage);
            $book_story->media =  $chapterimage;
        }
        $book_story->media_desc = $request->input('chapter-description');
        $book_story->rated = $request->input('chapter-audience-rate');
        $book_story->privacy = $request->input('chapter-status');
        $book_story->content = $request->input('chapter-content');


        
        $book_story->save();
        return redirect()->route('book.show', $request->input('story_id'))->with('success', 'Chapter Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request->input('book');
        $request->input('chapter');
        $chapter = Book_story::find($id);
        $book_next = Book_story::where('story_id', $chapter->story_id)->where('id', '>', $id)->first();
        $book_prev = Book_story::where('story_id', $chapter->story_id)->where('id', '<', $id)->first();
        // return $book;
        return view('guest.single_chapter', compact('chapter','book_next','book_prev'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapter = Book_story::find($id);
        return view('writer.edit-chapter', compact('chapter'));
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
            'chapter-title' => 'required'
        ]);
        
        $book_story = Book_story::find($id);;
        $book_story->story_id = $request->input('story_id');
        $book_story->story_name = $request->input('story_name');
        $book_story->chapter = $request->input('chapter-title');
        if($request->has('chapter_cover')){
            $this->validate($request,[
                'chapter_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
            ]);
            $chapterimage = $_FILES['chapter_cover']['name'] .'_'. auth()->user()->id .'_'. time().'.'.$request->chapter_cover->extension();  
            $request->chapter_cover->move(public_path('img/book-cover/chapter_cover'), $chapterimage);
            $book_story->media =  $chapterimage;
        }
        $book_story->media_desc = $request->input('chapter-description');
        $book_story->rated = $request->input('chapter-audience-rate');
        $book_story->privacy = $request->input('chapter-status');
        $book_story->content = $request->input('chapter-content');


        
        $book_story->save();
        return redirect()->route('book.show', $request->input('story_id'))->with('success', 'Chapter Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapter = Book_story::find($id);
        $chapter->delete();

        return redirect()->back()->with('success','Chapter Deleted');
    }
}
