<?php

namespace App\Http\Controllers;

use Session;

use App\Models\User;
use App\Models\Post;



use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct () {
        
        $this->middleware('auth');
     }

    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
                                        
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'url' => ['required', 'url'],
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
 
 
        $imagePath = request('image')->store('uploads', 'public');
 
        auth()->user()->posts()->create([
             
             'title' => $data['title'],
             'url' => $data['url'],
             'caption' => $data['caption'], 
             'image' => $imagePath,
        ]);
 
        Session::flash('success', 'Post successfully created.');

        return redirect()->route('posts.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        $post = Post::find($id);
        return view('admin.posts.edit')->with('post', $post);
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
         $post = Post::find($id);

         $data = request()->validate([
             'title' => 'required',
             'url' => 'required',
             'caption' => 'required'
         ]);

       

         if (request('image')) {
            $imagePath = request('image')->store('post', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        $post->update(array_merge(
            $data,
            $imageArray ?? []
        ));


        $post->title = $request->title;
        $post->url = $request->url;
        $post->caption = $request->caption;


        $post->save();

        Session::flash('success', 'Post successfully updated.');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'Post successfully deleted.');
        return redirect()->back();
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                