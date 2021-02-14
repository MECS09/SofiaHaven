<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->accesslevel == "admin") {
            $list = Blogs::get();
            return view ('admin.blog-list', compact('list'));
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(Auth::user()->accesslevel == "admin") {
        return view ('admin.blog-create');
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(Auth::user()->accesslevel == "admin") {
            $this->validate($request,[
                'blog-title' => 'required',
                'blog_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
            ]);
            
            
            
            $coverimage = $_FILES['blog_cover']['name'] .'_'. auth()->user()->id  .'_'. time().'.'.$request->blog_cover->extension();  
            $request->blog_cover->move(public_path('img/blog-cover'), $coverimage);
        
            $blog = new Blogs();
            $blog->title = $request->input('blog-title');
            $blog->cover_image = $coverimage;
            $blog->author = auth()->user()->id;
            $blog->content = $request->input('blog-content');
            $blog->category = $request->input('category');

            
            
            $blog->save();

            return redirect()->route('blog.list')->with('success', 'Blog Successfully Added');
            }
            else {
                return redirect()->back();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $blog = Blogs::find($id);
        return view('guest.blog-single', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if(Auth::user()->accesslevel == "admin") {
            $blog = Blogs::find($id);
            return view('admin.blog-edit', compact('blog'));
        }
        else {
            return redirect()->back();
        }

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
        
        if(Auth::user()->accesslevel == "admin") {
        $this->validate($request,[
            'blog-title' => 'required'
        ]);
        
        
        
        $blog = Blogs::find($id);
        $blog->title = $request->input('blog-title');
        if($request->has('blog_cover')){
            $this->validate($request,[
                'blog_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
            ]);
            $coverimage = $_FILES['blog_cover']['name'] .'_'. auth()->user()->id .'_'. time().'.'.$request->blog_cover->extension();  
            $request->blog_cover->move(public_path('img/blog-cover'), $coverimage);

            $blog->cover_image = $coverimage;

        }
        $blog->author = auth()->user()->id;
        $blog->content = $request->input('blog-content');
        $blog->category = $request->input('category');

        
        
        $blog->save();

        return redirect()->route('blog.list')->with('success', 'Blog Successfully Added');
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if(Auth::user()->accesslevel == "admin") {
        $blog = Blogs::find($id);
        $blog->delete();

        return redirect()->back()->with('success','blog Deleted');

        }
        else {
            return redirect()->back();
        }
    }

    
    public function Travel_and_Leisure() {
        
        $blog = Blogs::where('category', 'Travel and Leisure')->get();
        // return $blog->count();
        return view ('guest.travel_and_leisure', compact('blog'));
    }
    public function events() {
        
        $blog = Blogs::where('category', 'Events')->get();
        // return $blog->count();
        return view ('guest.events', compact('blog'));
    }
    public function random_thoughts() {
        
        $blog = Blogs::where('category', 'Random Thoughts')->get();
        // return $blog->count();
        return view ('guest.random_thoughts', compact('blog'));
    }
    
    public function writing_tips() {
        
        $blog = Blogs::where('category', 'Writing Tips')->get();
        // return $blog->count();
        return view ('guest.writing-tips', compact('blog'));
    }
    
    public function howtoearn() {
        
        $blog = Blogs::where('category', 'How to Earn')->get();
        // return $blog->count();
        return view ('guest.how-to-earn', compact('blog'));
    }
    
    public function usershow($id) {
        $blog = Blogs::find($id);
        return view('guest.blog-single', compact('blog'));
    }

}
