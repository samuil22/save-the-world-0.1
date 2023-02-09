<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_categories = BlogCategory::orderby('id','desc')->get();
         
        return view('admin.blogcategory', compact('blog_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|unique:blog_categories,name|max:255',
            'description' => 'required',
        ]);
        // passing data to database
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        // pass to model
        BlogCategory::create($data);

        // for toastr alert msg 
        $notify = ['message' => 'Category created successfully','alert-type' => 'success'];
 
        return redirect()->back()->with($notify);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // dd($request->all());
        $category = BlogCategory::find($id);
        // dd($category);

        // validate
        $request->validate([
            'name' => 'required|unique:blog_categories,name,'. $category->id . '|max:255',
            'description' => 'required',
        ]);

        // store  
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // update
        $category->update($data);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $category = BlogCategory::find($id);

       $category->delete();

       return redirect()->back();
    }
}
