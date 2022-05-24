<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\WorkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class WorkCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $works =  WorkCategory::with('user','works')->latest()->get();
//
//        foreach ($works as $item){
//            return  count($item->works);
//        }
//        exit();

        return view('backend.works.category.index',[
            'categories'=>WorkCategory::with('user','works')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return  view('backend.works.category.create');
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
            'name'=>'required|max:1000|min:3',
            'body'=>'required|min:10|max:10000',
            'status'=>'required|in:0,1',
        ]);

        if ($validate->fails()){
            return redirect()->back()->with('error','Your Validation Fails');
        }else{
            try {
                WorkCategory::create([
                    'user_id'=>auth()->id(),
                    'name'=>$request->input('name'),
                    'slug'=>Str::slug($request->input('name')),
                    'body'=>$request->input('body'),
                    'status'=>$request->input('status'),
                ]);

                return redirect()->back()->with('success','Your Category Add Successfully');
            }catch (\Exception $exception){
                info($exception->getMessage());
                return redirect()->back()->with('error','Category Data Saved fails');
            }
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
        return view('backend.works.category.show',[
            'category' => WorkCategory::with('user')->findOrFail($id)
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
        return view('backend.works.category.edit',[
            'category' => WorkCategory::findOrFail($id)
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
        $category = WorkCategory::findOrFail($id);

        $validate = Validator::make($request->all(),[
            'name'=>'required|max:1000|min:3',
            'body'=>'required|min:10|max:10000',
            'status'=>'required|in:0,1',
        ]);

        if ($validate->fails()){
            return redirect()->back()->with('error','Your Validation Fails');
        }else{
            try {
                $category->update([
                    'user_id'=>auth()->id(),
                    'name'=>$request->input('name'),
                    'slug'=>Str::slug($request->input('name')),
                    'body'=>$request->input('body'),
                    'status'=>$request->input('status'),
                ]);

                return redirect()->route('backend.categories.index')->with('success','Your Category Update Successfully');
            }catch (\Exception $exception){
                info($exception->getMessage());
                return redirect()->back()->with('error','Category Data Update fails');
            }
        }


    }

    public function unpublished($id)
    {
        $category = WorkCategory::findOrFail($id);
        $category->update([
           'status'=>0,
        ]);

        return redirect()->back()->with('success','Your Category Un unpublished Successfully');
    }

    public function published($id)
    {
        $category = WorkCategory::findOrFail($id);
        $category->update([
           'status'=>1,
        ]);

        return redirect()->back()->with('success','Your Category published Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = WorkCategory::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success','Your Category Delete Successfully');
    }
}
