<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Package;
use App\Models\Service;
use App\Models\Testimonial;

class PorfolioController extends Controller
{
    public function portfolio(){
        return view('front.portfolio');
    }
}
