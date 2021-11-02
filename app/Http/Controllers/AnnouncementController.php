<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function index()
    {
        if(Auth::user()->accesslevel == "admin") {
            $list = Announcement::get();
            return view ('admin.announcement-list', compact('list'));
        }
        else {
            return redirect()->back();
        }
    }
    public function create()
    {
        
        if(Auth::user()->accesslevel == "admin") {
        return view ('admin.announcement-create');
        }
        else {
            return redirect()->back();
        }
    }
    public function store(Request $request)
    {
        
        if(Auth::user()->accesslevel == "admin") {
            $this->validate($request,[
                'blog-title' => 'required',
                'blog_cover' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:2048'
            ]);
            
            
            
            $coverimage = $_FILES['blog_cover']['name'] .'_'. auth()->user()->id  .'_'. time().'.'.$request->blog_cover->extension();  
            $request->blog_cover->move(public_path('img/announcement-cover'), $coverimage);
        
            $announcement = new Announcement();
            $announcement->title = $request->input('blog-title');
            $announcement->image = $coverimage;
            $announcement->content = $request->input('blog-content');
            $announcement->start = $request->input('from');
            $announcement->end = $request->input('to');
            $announcement->link = $request->input('link');

            
            
            $announcement->save();

            return redirect()->route('announcement.list')->with('success', 'Announcement Successfully Added');
            }
            else {
                return redirect()->back();
            }
    }
}
