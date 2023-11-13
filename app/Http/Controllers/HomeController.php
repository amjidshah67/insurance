<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Package;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function home(){
        $blog = Blog::all();
        $service = Service::all();
        $package = Package::all();
        $testimonial = Testimonial::all();
        return view('front.index',
            compact('blog','service',
                'package' , 'testimonial'));
    }
//    public function services(){
//        return view('mckinney.services');
//    }
//    public function career(){
//        return view('mckinney.career');
//    }
//    public function blog(){
//        $blog = Blog::all();
//        return view('mckinney.blog',
//        compact('blog')
//        );
//    }
//    public function faqs(){
//        return view('mckinney.faqs');
//    }
//    public function contact_us(){
//        return view('mckinney.contact-us');
//    }
}
