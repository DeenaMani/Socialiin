@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Our_work</h3>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    
        <div class="page-content-warpper mt--45">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header">
                       @if(session()->has('message'))
                        <div class="alert alert-success" id="alert">
                            <button type="button" class="close" data-dismiss="alert"> X </button>
                            {{session()->get('message')}}
                        </div>
                        @endif
                        <h4>Edit Our_work</h4>                   
                    </div>
                    <div class="card-body">
                    @include('layouts.partials.messages')
                        <form action="{{ url('admin/ourwork/'.$ourwork->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="col-lg-12">
                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="col-lg-12">
                                            <label for="ourwork_Image">Image </label>
                                            <input type="file" class="form-control mb-4" name="ourwork_image" rows="4"value="{{$ourwork->ourwork_image}}">
                                            <img src="{{url('/public/image/ourwork/'.$ourwork->ourwork_image)}}" width="50px"> <br> 
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="ourwork_title">Title </label>
                                            <input type="Text" class="form-control mb-4" name="ourwork_title" rows="4"value="{{$ourwork->ourwork_title}}" >
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="ourwork_description">Description </label>
                                            <textarea type="Text" class="form-control mb-4" name="ourwork_description" rows="6"value="{{$ourwork->ourwork_description}}">{{$ourwork->ourwork_description}}</textarea>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <label for="status"> Status</label>
                                                <select name="status" class="form-control form-select">
                                                    <option selected disabled> Select status </option>
                                                    <option value="1" {{$ourwork->status == '1' ? 'selected' : ''}}> Active </option>
                                                    <option value="0" {{$ourwork->status == '0' ? 'selected' : ''}}> Inactive </option>
                                                </select>
                                            </div> 

                                            <div class="col-lg-12 p-3 justify-content-end">
                                                <input type="submit" class="btn btn-primary text-white" style="float:right;" value="Update Our-Work">
                                            </div>
                                        
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