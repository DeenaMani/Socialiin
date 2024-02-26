<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoForm;

class SeoFormController extends Controller
{
    public function index()
    {
        $result = SeoForm::latest()->paginate(10);
        
        return view ('admin.seoform.index',compact('result'));
    }

    public function store(Request $request)
    {
        $this -> validate ($request,[
            'user_name' => 'required',
            'user_email' => 'required',
            'user_phone' => 'required',
            'user_website_url' => 'required',
        ]);

        $data = $request ->all();

        $seoform = new SeoForm;
        $seoform = SeoForm::create($data);

        return redirect('/');
    }

    public function show(string $id)
    {
        $seoform = SeoForm::find($id);

        return view ('admin.seoform.show',compact('seoform','id'));
        
    }

    public function destroy(string $id)
    {
        $seoform -> delete($data);
 
        return redirect ('admin/contacdtform')->with('success',"Updated Successfully");
    }

    public function status($id,$status)
    {
        //echo $id." ".$status;
        $seoform = SeoForm::find($id);
        $seoform->status =   $status ? $status : 0;
        $seoform->save();
        echo json_encode(array("status" => 1));
    }
}
