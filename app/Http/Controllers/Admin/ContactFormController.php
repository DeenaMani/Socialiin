<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        $result = ContactForm::latest()->paginate(1);
        
        return view ('admin.contactform.index',compact('result'));
    }

    public function store(Request $request)
    {
        $this -> validate ($request,[
            'user_name' => 'required',
            'user_email' => 'required',
            'user_phone' => 'required',
        ]);

       
        $data = $request ->all();
        
        $contactform = new ContactForm;
        $contactform = ContactForm::create($data);

        return redirect('/contact');
    }

    public function show(string $id)
    {
        $contactform = ContactForm::find($id);

        return view('admin.contactform.show',compact('contactform','id'));
        
    }

    public function destroy(string $id)
    {
        $contactform -> delete($data);
 
        return redirect ('admin/contacdtform')->with('success',"Updated Successfully");
    }

    public function status($id,$status)
    {
        //echo $id." ".$status;
        $contactform = ContactForm::find($id);
        $contactform->status =   $status ? $status : 0;
        $contactform->save();
        echo json_encode(array("status" => 1));
    }
}
