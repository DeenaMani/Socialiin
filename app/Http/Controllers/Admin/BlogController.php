<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Blog::paginate(10)->onEachSide(1);

        return view ('admin.blog.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate ($request, [
            'blog_image' => 'required',
            'blog_title' => 'required',
            'blog_added_by'=>'required',
        ]);

        $data = $request->all();

        if ($request->hasfile('blog_image'))
        {  //check file present or not
            $images = $request->file('blog_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/image/blog'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['blog_image']=$image;
        } 
        $blog=new Blog;
        $blog=Blog::create($data);

        return redirect ('admin/blog')->with('success',"Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);

        return view ('admin/blog.edit',compact('blog','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate ($request, [
            'blog_title' => 'required',
            'blog_added_by' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasfile('blog_image'))
        {  //check file present or not
            $images = $request->file('blog_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get file extension
            $destinationPath = public_path('/image/blog'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['blog_image']=$image;
        } 

        $blog = Blog::find($id);
        $blog -> update($data);

        return redirect ('admin/blog')->with('success',"Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog= Blog::find($id);
        $blog->delete();

        return redirect ('admin/blog')->with('error',"Deleted Successfully");
    }

    public function status($id,$status)
    {
        //echo $id." ".$status;
        $blog = Blog::find($id);
        $blog->status =   $status ? $status : 0;
        $blog->save();
        echo json_encode(array("status" => 1));
    }
}
