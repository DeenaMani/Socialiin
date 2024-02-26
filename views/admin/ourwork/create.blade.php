@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Add Our_Work</h3>
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
                    <h1>Add Our_Work</h1>
                    </div>
                    <div class="card-body text-dark">
                    @include('layouts.partials.messages')
                        <form action="{{ url('admin/ourwork') }}" method="post" enctype="multipart/form-data" class="row">
                            @csrf

                            <div class="col-lg-12">
                                <div class="row">
                                     
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <label for="ourwork_image"> Image </label>
                                            <input type="file" class="form-control mb-4"  name="ourwork_image" >
                                        </div>
                                    
                                        <div class="col-lg-12">
                                            <label for="ourwork_title"> Title </label>
                                            <input type="Text" class="form-control mb-4"  name="ourwork_title" >
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="ourwork_description"> Description </label>
                                            <textarea type="Text" class="form-control mb-4"  rows="6" name="ourwork_description"> </textarea>
                                        </div> 
                                    </div>

                                    <div class="col-lg-6">
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
                        </form>
                    </div>
                </div> 
            </div>
        </div>
</div>
@endsection
        