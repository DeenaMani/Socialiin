<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $result = Client::paginate(10);
       return view('admin.clients.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate ($request, [
            'client_image' => 'required',
            'client_title' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasfile('client_image'))
        {  //check file present or not
            $images = $request->file('client_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/image/clients'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['client_image']=$image;
        } 
        $clients=new Client;
        $clients=Client::create($data);

        return redirect ('admin/client')->with('success',"Added Successfully");;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clients=Client::find($id);
        return view ('admin.clients.edit',compact('clients','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate ($request, [
            'client_title' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasfile('client_image'))
        {  //check file present or not
            $images = $request->file('client_image'); //get the file
            $image = time().'.'.$images->getClientOriginalExtension();
            $destinationPath = public_path('/image/clients'); //public path folder dir
            $images->move($destinationPath, $image);  //mve to destination you mentioned 
            $data['client_image']=$image;
        } 
        $clients=Client::find($id);
        $clients -> update($data);

        return redirect ('admin/client')->with('success',"Updated Successfully");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients=Client::find($id);
            $clients->delete();
            return redirect ('admin/client')->with('error',"Deleted Successfully");;
    }

    public function status($id,$status)
    {
        //echo $id." ".$status;
        $clients = Client::find($id);
        $clients->status =   $status ? $status : 0;
        $clients->save();
        echo json_encode(array("status" => 1));
    }
}
