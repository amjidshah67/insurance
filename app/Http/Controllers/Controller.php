<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function slugify($param)
    {
        return \Str::slug($param);
    }

    public function image_upload($file,$location)
    {
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-'.time() . '.' . $extension;
        $file->move($location, $filename);
        return $filename;
    }
}
