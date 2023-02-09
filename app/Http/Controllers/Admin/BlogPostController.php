<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Support\Facades\File;


class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::all();

        $objPost = new BlogPost();
        
        $posts = $objPost->join('blog_categories','blog_categories.id', '=', 'blog_posts.category_id')->select('blog_posts.*','blog_categories.name as category_name')->get() ;
        // dd($posts);

        return view('admin.blogposts',compact('categories','posts'));
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
        // dd($request->all());
          $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
          ]);

          $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'status' => $request->status,
          ];

          if($request->hasFile('thumbnil')){
            $file = $request->file('thumbnil');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move(public_path('blog_post_thumbnails'),$filename);
            $data['thumbnil']= $filename;
          }

          BlogPost::create($data);

          return redirect()->back()->with('success','post created successfully');
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
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
          ]);

          $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'status' => $request->status,
          ];

          if($request->hasFile('thumbnil')){  

            if($request->old_thumb){
                File::delete(public_path('blog_post_thumbnails/'. $request->old_thumb));
            }


            $file = $request->file('thumbnil');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move(public_path('blog_post_thumbnails'),$filename);
            $data['thumbnil']= $filename;
          }

          BlogPost::where('id',$id)->update($data);

          return redirect()->back()->with('success','Blog Post updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = BlogPost::find($id);
        
        if($posts->thumbnil){
            File::delete(public_path('blog_post_thumbnails/'.$posts->thumbnil));
        }


        $posts->delete();

        return redirect()->back()->with('success','Post deleted');

    }
}
