<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [];
        $data['galleries'] = Gallery::latest()->get();
//        return Gallery::all();
        return view('backend.gallery.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return  view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(),[
            'title' =>'required|min:3|max:500',
            'image' =>'required|image',
            'cat_status'=>'required|in:out,col,fam,tra,oth',
            'status'=>'required|in:0,1',
            'body'=>'required|min:5|max:1000',
        ]);

        if ($validate->fails()){

            return redirect()->back()->withErrors($validate)->with('error','Your Validation Faild');
        }

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name =Str::random(15).'.'.$image->getClientOriginalExtension();
            $image->storeAs('gallery',$name);
        }
        try {

            Gallery::create([
                'user_id'=>auth()->id(),
                'title'=>$request->input('title'),
                'slug'=>Str::slug($request->title),
                'image'=>$name ?? 'default.png',
                'cat_status'=>$request->input('cat_status'),
                'text'=>$request->input('body'),
                'status'=>$request->input('status'),
            ]);

//            toast('Your Data Save Successfully','success');
            return redirect()->back()->with('success','Our Data Save Successfully');

        }catch (\Exception $exception){
//            toast('Data Saved Falis...!!!');
            info($exception);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
//        return Gallery::find($id)->first();
        return  view('backend.gallery.show',[
            'photo'=>Gallery::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
