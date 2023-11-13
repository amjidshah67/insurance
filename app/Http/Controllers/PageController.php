<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Package;
use App\Models\Service;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function about(){
        return view('front.about');
    }
    public function appoint(){
        return view('front.appoint');
    }
    public function pricing(){
        return view('front.pricing');
    }
    public function team(){
        return view('front.team');
    }
//    public function faqs(){
//        return view('mckinney.faqs');
//    }
//    public function contact_us(){
//        return view('mckinney.contact-us');
//    }
}
