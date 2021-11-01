<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save_comment(Request $request){
        $request->validate([
            'comment' => 'required',
            'chapter_id' => 'required'
        ]);
        
        $user_id = null;

        if(auth()->user()->id != null){
            $user_id = auth()->user()->id;
        }
        // dd($request);


        $data = [
            'user_id' => $user_id,
            'chapter_id' => $request->input('chapter_id'),
            'story_id' => $request->input('story_id'),
            'comment' => $request->input('comment'),
        ];

        Comments::create($data);

        return redirect()->back()->with('success', 'Comment Submitted Successfully');

    }

    public function save_reply(Request $request){
        $request->validate([
            'comment' => 'required',
            'chapter_id' => 'required'
        ]);

        $user_id = null;

        if(auth()->user()->id != null){
            $user_id = auth()->user()->id;
        }
        
        $data = [
            'user_id' => $user_id,
            'chapter_id' => $request->input('chapter_id'),
            'story_id' => $request->input('story_id'),
            'comment_id' => $request->input('comment_id'),
            'comment' => $request->input('comment'),
        ];
        Comments::create($data);

        return redirect()->back()->with('success', 'Comment Submitted Successfully');

    }
}
