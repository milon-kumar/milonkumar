<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $out = Gallery::where('cat_status','out')->get();
        $fam = Gallery::where('cat_status','fam')->get();
        $tra = Gallery::where('cat_status','tra')->get();
        $col = Gallery::where('cat_status','col')->get();
        $data = array($out, $col, $fam, $tra);

        return view('frontend.gallery.gallery', compact('data'));
    }
}
