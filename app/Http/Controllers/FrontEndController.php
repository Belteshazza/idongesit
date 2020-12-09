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
        return view('index')->with('posts', Post::all())
                            ->with('settings', Setting::first())
                            ->with('first_profiles', Profile::orderBy('created_at', 'desc')->first());
    }

    public function show(\App\Post $post)
    {
        return view('show', compact('post'));
    }


    
}
