<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = About::paginate(10);
        
        return view ('admin.about.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate ($request,[
            'about_title' => 'required',
            'about_description' => 'required',
        ]);

        $data = $request ->all();

        if ($request->hasfile('about_image'))
        {  //check file present or not
            $images = $request->file('about_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/image/about'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['about_image']=$image;
        } 

        $about = new About;
        $about = About::create($data);

        return redirect('admin/about');
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
        $about = About::find($id);
        return view ('admin.about.edit',compact('about','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate ($request, [
            'about_title' => 'required',
            'about_description' => 'required',
         ]);
 
         $data = $request ->all();

         if ($request->hasfile('about_image'))
         {  //check file present or not
             $images = $request->file('about_image'); //get the file
             $image = time().'.'.$images->getClientOriginalExtension();
             $destinationPath = public_path('/image/about'); //public path folder dir
             $images->move($destinationPath, $image);  //mve to destination you mentioned 
             $data['about_image']=$image;
         } 

         
         $about =About::find($id);
         $about -> update($data);
 
         return redirect ('admin/about')->with('success',"updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about=About::find($id);
        $about -> delete();

        return redirect ('admin/about')->with('error',"Deleted Successfully");
    }

    public function status($id,$status)
    {
        //echo $id." ".$status;
        $about = About::find($id);
        $about->status =   $status ? $status : 0;
        $about->save();
        echo json_encode(array("status" => 1));
    }
}
