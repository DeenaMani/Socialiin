<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourwork;

class OurWorkController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Ourwork::paginate(10);
        
        return view ('admin.ourwork.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.ourwork.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate ($request,[
            'ourwork_title' => 'required',
            'ourwork_image' => 'required',
            'ourwork_description' => 'required',
        ]);

        $data = $request ->all();

        if ($request->hasfile('ourwork_image'))
        {  //check file present or not
            $images = $request->file('ourwork_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/image/ourwork'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['ourwork_image']=$image;
        } 

         $data['category_id'] = "1";

        $ourwork = new Ourwork;
        $ourwork = Ourwork::create($data);

        return redirect('admin/ourwork')->with('success',"Added Successfully");;
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
        $ourwork = Ourwork::find($id);
        return view ('admin.ourwork.edit',compact('ourwork','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate ($request, [
            'ourwork_title' => 'required',
            'ourwork_description' => 'required',
         ]);
 
         $data = $request ->all();

         if ($request->hasfile('ourwork_image'))
         {  //check file present or not
             $images = $request->file('ourwork_image'); //get the file
             $image = time().'.'.$images->getClientOriginalExtension();
             $destinationPath = public_path('/image/ourwork'); //public path folder dir
             $images->move($destinationPath, $image);  //mve to destination you mentioned 
             $data['ourwork_image']=$image;
         } 

         
         $ourwork =Ourwork::find($id);
         $ourwork -> update($data);
 
         return redirect ('admin/ourwork')->with('success',"Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ourwork=Ourwork::find($id);
        $ourwork -> delete();

        return redirect ('admin/ourwork')->with('error',"Deleted Successfully");
    }

    public function status($id,$status)
    {
        //echo $id." ".$status;
        $ourwork = Ourwork::find($id);
        $ourwork->status =   $status ? $status : 0;
        $ourwork->save();
        echo json_encode(array("status" => 1));
    }
}
