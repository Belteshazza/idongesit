<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Profile;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
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
        return view('admin.profiles.index')->with('profile', Profile::all());
                                        
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('admin.profiles.create');
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
            'caption' => 'required',
            'image' => ['required', 'image'],
            'image2' => ['required', 'image'],
        ]);
 
 
        $imagePath = request('image')->store('uploads', 'public');
        $imagePath2 = request('image2')->store('uploads', 'public');
 
        auth()->user()->profiles()->create([
            
             'title' => $data['title'],
             'caption' => $data['caption'], 
             'image' => $imagePath,
             'image2' => $imagePath2,
        ]);
 
        Session::flash('success', 'Profile successfully created.');

        return redirect()->route('profiles.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        $profile = Profile::find($id);
        return view('admin.profiles.edit')->with('profile', $profile);
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
         $profile = Profile::find($id);

         $data = request()->validate([
             'title' => 'required',
             'caption' => 'required'
         ]);

       

         if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make($request->file('image')->getRealPath());
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        $profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        if (request('image2')) {
            $imagePath = request('image2')->store('profile', 'public');

            $image = Image::make($request->file('image2')->getRealPath());
            $image->save();

            $imageArray = ['image2' => $imagePath];
        }

        $profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        $profile->title = $request->title;
        $profile->caption = $request->caption;


        $profile->save();

        Session::flash('success', 'Profile successfully updated.');

        return redirect()->route('profiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        

        $profile->delete();

        Session::flash('success', 'Profile successfully deleted.');

        return redirect()->route('profiles.index');
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                