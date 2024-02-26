@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Add Banner</h3>
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
                    <h1>Add Banner</h1>
                    </div>
                    <div class="card-body text-dark">

                        <form action="{{ url('admin/banner') }}" method="post" enctype="multipart/form-data" class="row">
                            @csrf

                            <div class="col-lg-12">
                            @include('layouts.partials.messages')
                                    <div class="col-lg-6">
                                        <label for="banner_image"> Image </label>
                                        <input type="filr" class="form-control mb-4"  name="banner_image" required>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <label for="banner_title"> Title </label>
                                        <textarea type="Text" class="form-control mb-4"  name="banner_title" required> </textarea>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="banner_description"> Description </label>
                                        <textarea type="Text" class="form-control mb-4"  name="banner_description"> </textarea>
                                    </div>

                                    <div class="col-lg-6 my-5 pt-3 px-3" >
                                        <input type="submit" class="btn btn-primary text-white mx-5" style="float:right;" value="Save Banner">
                                    </div>          
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
</div>
@endsection
        