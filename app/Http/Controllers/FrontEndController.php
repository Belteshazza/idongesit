<?php

namespace App\Http\Controllers;

use App\Profile;
use App\FrontEnd;
use App\Setting;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')->with('posts', Post::all())
                            ->with('settings', Setting::first())
                            ->with('first_profiles', Profile::orderBy('created_at', 'desc')->first());
    }

    public function show(\App\Post $post)
    {
        return view('show', compact('post'));
    }


    
}
