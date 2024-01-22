<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\FrontEnd;
use App\Models\Setting;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('index')->with('posts', $posts)
            ->with('settings', Setting::first())
            ->with('first_profiles', Profile::first());
    }



    public function show(\App\Models\Post $post)
    {
        return view('show', compact('post'));
    }


    
}
