@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Contact Form</h3>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    
        <div class="page-content-warpper mt--45">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header">
                        <h4>Contact Form show</h4>                   
                    </div>
                    <div class="card-body px-5">
                       <div class="row mb-2"> <h5 class="col-lg-1"> Id </h5> <span class=" col-lg-11 h5">: {{$contactform->id}} </span>   </div>
                       <div class="row mb-2"> <h5 class="col-lg-1"> Name </h5> <span class=" col-lg-11 h5">: {{$contactform->user_name}} </span>   </div>
                       <div class="row mb-2"> <h5 class="col-lg-1"> E Mail </h5> <span class=" col-lg-11 h5">: {{$contactform->user_email}} </span>   </div>
                       <div class="row mb-2"> <h5 class="col-lg-1"> Phone </h5> <span class=" col-lg-11 h5">: {{$contactform->user_phone}} </span>   </div>
                       <div class="row mb-2"> <h5 class="col-lg-1"> Service </h5> <span class=" col-lg-11 h5">: {{$contactform->service}} </span>   </div>
                       <div class="row mb-2"> <h5 class="col-lg-1"> Message </h5> <span class=" col-lg-11 h5">: {!!$contactform->message!!} </span>   </div>
                       <div class="row mb-2"> <h5 class="col-lg-1"> Status </h5> <span class=" col-lg-11 h5">: {{$contactform->status}} </span>   </div>
                        <div class="col-lg-12 p-3 justify-content-end">
                            <a href="{{ url('admin/contactform') }}" class="btn btn-primary text-white" style="float:right;"> Go Back</a>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

</div> 
 @endsection