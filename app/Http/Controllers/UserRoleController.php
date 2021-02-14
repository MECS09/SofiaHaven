<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleController extends Controller
{
    public function index() {
        
        if(Auth::user()->accesslevel == "admin") {
        $user = User::where('accesslevel','user')->get();
        $writer = User::where('accesslevel','writer')->get();
        return view('admin.user_role', compact('user','writer'));
        
        }
        else {
            return redirect()->back();
        }
    }
    
    public function changetouser($id) {
        
        if(Auth::user()->accesslevel == "admin") {
        $user = User::find($id);
        $user->accesslevel = 'user';
        $user->save();
        return redirect()->route('user.list')->with('success', 'Blog Successfully Added');
        
        }
        else {
            return redirect()->back();
        }
    }
    public function changetowriter($id) {
        
        if(Auth::user()->accesslevel == "admin") {
        $writer = User::find($id);
        $writer->accesslevel = 'writer';
        $writer->save();
        return redirect()->route('user.list')->with('success', 'Blog Successfully Added');
        }
        else {
            return redirect()->back();
        }
    }


}
