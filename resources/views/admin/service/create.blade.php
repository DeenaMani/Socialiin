@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Add Services</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="page-content-warpper mt--45">
            <div class="container-fluid">
                <div class="card mt--45">
                    <div class="card-header">
                           @if(session()->has('message'))
                            <div class="alert alert-success" id="alert">
                                <button type="button" class="close" data-dismiss="alert"> X </button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                    <h1>Add Service</h1>
                    </div>
                    <div class="card-body text-dark">
                          @include('layouts.partials.messages')
                        <form action="{{ url('admin/service') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-lg-6">    
                                    
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_title"> Title </label>
                                        <input type="text" class="form-control mb-4" name="service_title" >  
                                    </div> 
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_sub_title"> Sub Title </label>
                                        <input type="text" class="form-control mb-4" name="service_sub_title" > 
                                    </div> 
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_slug"> Slug </label>
                                        <input type="text" class="form-control mb-4" name="service_slug"  >
                                    </div>
                                </div> 

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_logo"> Logo </label>
                                        <input type="file" class="form-control mb-4" name="service_logo" >
                                    </div> 
                                </div> 
                                
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_image_1"> Image 1</label>
                                        <input type="file" class="form-control mb-4" name="service_image_1" >
                                    </div> 
                                </div> 

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_image_2"> Image 2</label>
                                        <input type="file" class="form-control mb-4" name="service_image_2" >
                                    </div> 
                                </div> 

                            </div>
                            
                            <div class="col-lg-6">

                                <div class="col-lg-12">
                                   <div class="row">
                                        <label for="service_short_description"> Short Description </label>
                                        <textarea type="text" class="form-control mb-4" row="6" name="service_short_description" > </textarea> 
                                    </div> 
                                </div> 

                                <div class="col-lg-12">
                                   <div class="row">
                                        <label for="service_description">Description </label>
                                        <textarea type="text" class="form-control mb-4" row="6" name="service_description" > </textarea> 
                                    </div> 
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="service_full_description"> Full Description </label>
                                        <textarea type="text" id="summernote-basic" class="form-control mb-4" row="6" name="service_full_description" > </textarea>    
                                     </div> 
                                </div> 
     
                             
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <label for="status"> Status</label> <br>
                                            <select name="status" class="form-control">
                                                <option selected disabled> Select status </option>
                                                <option value="1"> Active </option>
                                                <option value="0"> Inactive </option>
                                            </select>
                                        </div> 
                                   
                                        <div class="col-lg-12 p-3 justify-content-end">
                                            <input type="submit" class="btn btn-primary text-white" style="float:right;" value="Save service">
                                        </div>
                                 
                                    </div> 
                            </div>
                            </div>              
                        </form>
                    </div>
                </div> 
            </div>
        </div>
</div>
@endsection
        