<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ForumSettingController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $subcategory = Subcategory::all();

        return view('admin.forum_settings', compact('category', 'subcategory'));
    }
}
