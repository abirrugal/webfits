<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\send_custom_email;
use App\Models\Contact;
use App\Models\PageCreate;
use App\Notifications\VerificationEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtherFrontendController extends Controller
{
    public function about_us(){
        return view('frontend.other_pages.about');
    }

    public function contact_us(){
      
        return view('frontend.other_pages.contact');
    }

    public function terms_and_conditions(){
        return view('frontend.other_pages.terms');
    }

    public function privacy(){
        return view('frontend.other_pages.privacy');
    }

    public function page_content($id){

        $page_contents = PageCreate::find($id);

   return view('frontend.other_pages.about', compact('page_contents'));

    }

    public function subs_email(Request $request){

       $email = $request->email;
       Mail::to('abir.rugal@gamil.com')->send(new send_custom_email($email));

       $this->successMessage("Subscribed Success.");
       return redirect()->back();
    }



}
