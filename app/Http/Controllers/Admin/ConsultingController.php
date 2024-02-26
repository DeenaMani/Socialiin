<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consulting;

class ConsultingController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Consulting::all();
        
        return view ('admin.consulting.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.consulting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate ($request,[
            'consulting_title' => 'required',
            'consulting_sub_title' => 'required',
            'consulting_image' => 'required',
            'consulting_description' => 'required',
        ]);

        $data = $request ->all();

        if ($request->hasfile('consulting_image'))
        {  //check file present or not
            $images = $request->file('consulting_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/image/consulting'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['consulting_image']=$image;
        } 

        $consulting = new Consulting;
        $consulting = Consulting::create($data);

        return redirect('admin/consulting')->with('success',"Added Successfully");
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
        $consulting = Consulting::find($id);
        return view ('admin.consulting.edit',compact('consulting','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate ($request, [
            'consulting_title' => 'required',
            'consulting_sub_title' => 'required',
         ]);
 
         $data = $request ->all();

         if ($request->hasfile('consulting_image'))
         {  //check file present or not
             $images = $request->file('consulting_image'); //get the file
             $image = time().'.'.$images->getClientOriginalExtension();
             $destinationPath = public_path('/image/consulting'); //public path folder dir
             $images->move($destinationPath, $image);  //mve to destination you mentioned 
             $data['consulting_image']=$image;
         } 

         
         $consulting =Consulting::find($id);
         $consulting -> update($data);
 
         return redirect ('admin/consulting')->with('success',"Updated Successfully");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $consulting=Consulting::find($id);
        $consulting -> delete();

        return redirect ('admin/consulting')->with('error',"Deleted Successfully");
    }
}
