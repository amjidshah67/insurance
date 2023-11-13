<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactMkController extends Controller
{
    public function contact_us(){
        return view('front.contact');
    }
//    public function insert_contact(Request $request){
//        $name = $request->input('name');
//        $email = $request->input('email');
//        $phone = $request->input('phone');
//        $message = $request->input('message');
//        $data = array('name'=>$name,
//            'email'=>$email,'phone'=>$phone,
//            'message'=>$message);
//        Contact::create($data);
//        return redirect()->back()->withSuccess('Successfull');
//    }
}
