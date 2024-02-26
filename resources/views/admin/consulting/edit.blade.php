@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Consulting</h3>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        @include('layouts.partials.messages')
        <div class="page-content-warpper mt--45">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header">
                    <div>
                            @if(session()->has('message'))
                            <div class="alert alert-success" id="alert">
                                <button type="button" class="close" data-dismiss="alert"> X </button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                        <h4>Edit Consulting</h4>                   
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/consulting/'.$consulting->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="col-lg-12">
                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="col-lg-12">
                                            <label for="consulting_image">Image </label>
                                            <input type="file" class="form-control mb-4" name="consulting_image"value="{{$consulting->consulting_image}}">
                                            <img src="{{url('/public/image/consulting/'.$consulting->consulting_image)}}" width="50px"> <br> 
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="consulting_title">Title </label>
                                            <input type="Text" class="form-control mb-4" name="consulting_title"value="{{$consulting->consulting_title}}" required>
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="consulting_sub_title">Sub Title </label>
                                            <input type="Text" class="form-control mb-4" name="consulting_sub_title"value="{{$consulting->consulting_sub_title}}" required>
                                        </div>

                                    </div>
                                    
                                    <div class="col-lg-6">

                                        <div class="col-lg-12">
                                            <label for="consulting_description">Description </label>
                                            <textarea type="Text" id="summernote-basic" class="form-control mb-4" name="consulting_description" rows="4" value="{{$consulting->consulting_description}}">{{$consulting->consulting_description}}</textarea>
                                        </div>

                                        <div class="col-lg-12 pt-4">
                                            <input type="submit" class="btn btn-primary text-white"  style="float:right;" value="Update consulting">
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