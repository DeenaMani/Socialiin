<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Service::paginate(10);

        return view('admin.service.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = Service::all();
        return view('admin.service.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'service_title' => 'required',
            'service_sub_title' => 'required',
            'service_short_description' => 'required',
            'service_description' => 'required',
            'service_full_description' => 'required',
            'service_logo' => 'required',
            'service_image_1' => 'required',
            'service_image_2' => 'required',
        ]);

        $data = $request->all();

        if ($request ->hasfile('service_logo'))
        { //check if the file present or not
            $images = $request->file('service_logo'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get the file extension
            $destinationpath = public_path('/image/service');//public path folder dir
            $images -> move($destinationpath,$image); //move to destination you menstioned
            $data['service_logo'] = $image;
        }

        if ($request ->hasfile('service_image_1'))
        { //check if the file present or not
            $images = $request->file('service_image_1'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get the file extension
            $destinationpath = public_path('/image/service');//public path folder dir
            $images -> move($destinationpath,$image); //move to destination you menstioned
            $data['service_image_1'] = $image;
        }

        if ($request ->hasfile('service_image_2'))
        { //check if the file present or not
            $images = $request->file('service_image_2'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get the file extension
            $destinationpath = public_path('/image/service');//public path folder dir
            $images -> move($destinationpath,$image); //move to destination you menstioned
            $data['service_image_2'] = $image;
        }

        $service = new service;
        $service = Service::create($data);

        return redirect('admin/service')->with('success',"Added Successfully");;
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
        $service = Service::find($id);
        return view ('admin.service.edit',compact('service','id'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate($request, [
            'service_title' => 'required',
            'service_sub_title' => 'required',
            'service_short_description' => 'required',
            'service_description' => 'required',
            'service_full_description' => 'required',
            'service_sub_title' => 'required',
        ]);

        $data = $request->all();

        if ($request ->hasfile('service_logo'))
        { //check if the file present or not
            $images = $request->file('service_logo'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get the file extension
            $destinationpath = public_path('/image/service');//public path folder dir
            $images -> move($destinationpath,$image); //move to destination you menstioned
            $data['service_logo'] = $image;
        }

        if ($request ->hasfile('service_image_1'))
        { //check if the file present or not
            $images = $request->file('service_image_1'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get the file extension
            $destinationpath = public_path('/image/service');//public path folder dir
            $images -> move($destinationpath,$image); //move to destination you menstioned
            $data['service_image_1'] = $image;
        }

        if ($request ->hasfile('service_image_2'))
        { //check if the file present or not
            $images = $request->file('service_image_2'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();//get the file extension
            $destinationpath = public_path('/image/service');//public path folder dir
            $images -> move($destinationpath,$image); //move to destination you menstioned
            $data['service_image_2'] = $image;
        }

        $service = Service::find($id);
        $service -> update($data);

        return redirect('admin/service')->with('success',"Updated Successfully");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $service=Service::find($id);
        $service -> delete();

        return redirect('admin/service')->with('error',"Deleted Successfully");;
    }

     public function status($id,$status)
    {
        //echo $id." ".$status;
        $service = Service::find($id);
        $service->status =   $status ? $status : 0;
        $service->save();
        echo json_encode(array("status" => 1));
    }
}
