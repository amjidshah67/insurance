<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Package;
use App\Models\Service;
use App\Models\Testimonial;

class NewsController extends Controller
{
    public function news(){
        return view('front.blog');
    }
}
