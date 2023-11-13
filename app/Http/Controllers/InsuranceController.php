<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Package;
use App\Models\Service;
use App\Models\Testimonial;

class InsuranceController extends Controller
{
    public function insurance(){
        return view('front.insurance');
    }
    public function appoint(){
        return view('front.appoint');
    }
    public function pricing(){
        return view('front.pricing');
    }

}
