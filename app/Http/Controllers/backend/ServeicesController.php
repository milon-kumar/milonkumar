<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServeicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('backend.services.index',[
           'services'=>Services::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.services.create');
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
            'title'=>'required|min:3|max:1000',
            'btn'=>'required|min:3',
            'status'=>'required|in:0,1',
            'image'=>'required|image|mimes:jpeg,jpg,png,webp',
        ]);

        if ($validate->fails()){
            return back()->withErrors($validate)->with('Validation Fails','error');
        }

        try {

            if ($request->hasFile('image')){
                $image = $request->file('image');
                $name = Str::random(10).'.'.$image->getClientOriginalExtension();
                $image->storeAs('services',$name);
            }

            Services::create([
                'user_id'=>auth()->id(),
                'title'=>$request->input('title'),
                'slug'=>Str::slug($request->input('title')),
                'btn'=>$request->input('btn'),
                'body'=>$request->input('body'),
                'status'=>$request->input('status'),
                'image'=>$name,
            ]);

            return back()->with('success','Your Services Data Save Successfully');
        }catch (\Exception $exception){
            return $exception->getMessage();
//            return back()->with('error',$exception->getMessage());
        }
    }

    public function unpublished($id)
    {
        $services = Services::findOrFail($id);
        $services->update([
           'status'=>0,
        ]);
        return redirect()->back()->with('success','Your Services Unpublished Successfully');
    }

    public function published($id)
    {
        $services = Services::findOrFail($id);
        $services->update([
           'status'=>1,
        ]);
        return redirect()->back()->with('success' , 'Your Services Published Successfully','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('backend.services.show',[
           'service'=>Services::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('backend.services.edit',[
            'service'=>Services::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $service = Services::findOrFail($id);

        $validate = Validator::make($request->all(),[
            'title'=>'required|min:3|max:1000',
            'btn'=>'required|min:3',
            'status'=>'required|in:0,1',
        ]);

        if ($validate->fails()){
            return back()->withErrors($validate)->with('Validation Fails','error');
        }

        if ($request->hasFile('image')){
            @unlink('uploads/services/'.$service->image);
            $image = $request->file('image');
            $name = Str::random(10).'.'.$image->getClientOriginalExtension();
            $image->storeAs('services',$name);

            $service->update([
                'user_id'=>auth()->id(),
                'title'=>$request->input('title'),
                'slug'=>Str::slug($request->input('title')),
                'btn'=>$request->input('btn'),
                'body'=>$request->input('body'),
                'status'=>$request->input('status'),
                'image'=>$name,
            ]);
        }else{
            $service->update([
                'user_id'=>auth()->id(),
                'title'=>$request->input('title'),
                'slug'=>Str::slug($request->input('title')),
                'btn'=>$request->input('btn'),
                'body'=>$request->input('body'),
                'status'=>$request->input('status'),
                'image'=>$service->image,
            ]);
        }

        return redirect()->route('backend.services.index')->with('success','Your Data Update Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $services = Services::findOrFail($id);
        $services->delete();
        return redirect()->back()->with('success','Your Data Deleted Successfully');
    }
}
