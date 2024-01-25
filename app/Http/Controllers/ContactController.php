<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function getContact()
  {

    return view('contact_us');
  }

  public function saveContact(Request $request)
  {

    $this->validate($request, [
      'name' => 'required',
      'email' => ['required', 'email'],
      'subject' => 'required',
      'phone_number' => 'required',
      'message' => 'required',
      'captcha' => 'required|captcha'
      
    ]);

    // $data = $request->all();
      

    // Mail::raw($data, function ($message) {
    //   $message->to(config('mail.to.address'))
    //   ->subject('New Contact Form Submission');
    // });  


     Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to(config('mail.to.address'));
               });
  

    return back()->with('success', 'Thank you for contacting us!');
  }

  public function reloadCaptcha()
  {
    return response()->json(['captcha' => captcha_img()]);
  }
}
