<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update()
    {
    

        $this->validate(request(),[
            'wdev' => 'required',
            'wdesign' => 'required',
            'frespon' => 'required',
            'ecom' => 'required',
            'pweb' => 'required',
            'customs' => 'required',
            'about1' => 'required',
            'about2' => 'required',
            'about3' => 'required'
        ]);

        $settings = Setting::first();

       $settings->wdev = request()->wdev;
       $settings->wdesign = request()->wdesign;
       $settings->frespon = request()->frespon;
       $settings->ecom = request()->ecom;
       $settings->pweb= request()->pweb;
       $settings->customs = request()->customs;
       $settings->about1= request()->about1;
       $settings->about2 = request()->about2;
       $settings->about3 = request()->about3;


       $settings->save();

       Session::flash('success', 'Settings successfully updated.');

       return redirect()->route('settings');

        
    }
}
