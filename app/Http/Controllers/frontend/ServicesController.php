<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function viewService($slug)
    {
        $service = Services::where('slug',$slug)->where('status',1)->first();
        return view('frontend.services.service',[
            'service'=>$service,
        ]);
    }
}
