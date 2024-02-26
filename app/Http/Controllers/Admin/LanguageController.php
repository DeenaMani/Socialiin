<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Language::paginate(10);

        return view ('admin.language.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate ($request, [
            'title' => 'required',
            'slug'  => 'required'
        ]);

        $data = $request->all();

        $language = new Language;
        $language = Language::create($data);

        return redirect ('admin/language')->with('success',"Added Successfully");
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
        $language = Language::find($id);

        return view ('admin/language.edit',compact('language','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate ($request, [
            'slug'  => 'required'
        ]);

        $data = $request->all();

        $language = Language::find($id);
        $language -> update($data);

        return redirect ('admin/language')->with('success',"Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $language= Language::find($id);
        $language->delete();

        return redirect ('admin/language')->with('error',"Deleted Successfully");
    }

    
    public function status($id,$status)
    {
        //echo $id." ".$status;
        $language = Language::find($id);
        $language->status =   $status ? $status : 0;
        $language->save();
        echo json_encode(array("status" => 1));
    }
}
