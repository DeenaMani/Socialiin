@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Add languages</h3>
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
                    <h1>Add Language</h1>
                    </div>
                    <div class="card-body text-dark">
                         @include('layouts.partials.messages')
                        <form action="{{ url('admin/language') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <label for="title"> Title </label>
                                        <input type="text" class="form-control mb-3" name="title">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="sub_title"> Sub title </label>
                                        <input type="text" class="form-control mb-3" name="sub_title">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="slug"> Slug </label>
                                        <input type="text" class="form-control mb-3" name="slug">
                                    </div>
                                </div>
    
                                <div class="col-lg-6">

                                    <div class="col-lg-12">
                                        <label for="description"> description </label>
                                        <textarea type="text" class="form-control mb-3" rows="6" name="description"></textarea>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <label for="status"> Status</label> <br>
                                        <select name="status" class="form-control">
                                            <option selected disabled> Select status </option>
                                            <option value="1"> Active </option>
                                            <option value="0"> Inactive </option>
                                        </select>
                                    </div> 
                                    <div class="col-lg-12 p-3 ">
                                        <input type="submit" class="btn btn-primary text-white" style="float:right;" value="Save Language">
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
        