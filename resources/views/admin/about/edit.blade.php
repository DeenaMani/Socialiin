@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">About</h3>
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
                           @if(session()->has('message'))
                            <div class="alert alert-success" id="alert">
                                <button type="button" class="close" data-dismiss="alert"> X </button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                        <h4>Edit About</h4>                   
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/about/'.$about->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <label for="about_title">Title </label>
                                            <input type="Text" class="form-control mb-4" name="about_title" rows="4"value="{{$about->about_title}}" >
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="about_description">Description </label>
                                            <textarea type="Text" class="form-control mb-4" name="about_description" rows="4"value="{{$about->about_description}}">{{$about->about_description}}</textarea>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label for="status"> Status</label> <br>
                                            <select name="status" class="form-control">
                                                <option selected disabled> Select status </option>
                                                <option value="1" {{$about->status == '1' ? 'selected' : ''}}> Active </option>
                                                <option value="0" {{$about->status == '0' ? 'selected' : ''}}> Inactive </option>
                                            </select>
                                        </div>

                                        <div class="col-lg-12 pt-4">
                                            <input type="submit" class="btn btn-primary text-white " value="Update about">
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