@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Add Clients</h3>
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
                    <h1>Add Client</h1>
                    </div>
                    <div class="card-body text-dark">
                         @include('layouts.partials.messages')
                        <form action="{{ url('admin/client') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="client_image">Image </label>
                                        <input type="file" class="form-control mb-3" name="client_image" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="client_title"> Title </label>
                                        <input type="text" class="form-control mb-4" name="client_title" required> 
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
                                        <div class="col-lg-12 p-3 ">
                                            <input type="submit" class="btn btn-primary text-white" style="float:right;" value="Save Client">
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
        