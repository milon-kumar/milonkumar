<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $out = Gallery::where('cat_status','out')->where('status',1)->orderBy('created_at','desc')->paginate(12);
        $fam = Gallery::where('cat_status','fam')->where('status',1)->orderBy('created_at','desc')->paginate(12);
        $tra = Gallery::where('cat_status','tra')->where('status',1)->orderBy('created_at','desc')->paginate(12);
        $col = Gallery::where('cat_status','col')->where('status',1)->orderBy('created_at','desc')->paginate(12);
//        $data = array($out, $col, $fam, $tra);


        return view('frontend.gallery.gallery',[
            'out'=>$out,
            'fam'=>$fam,
            'tra'=>$tra,
            'col'=>$col,
        ]);
    }
}
