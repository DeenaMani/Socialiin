@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">language</h3>
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
                        <h4>Edit language</h4>                   
                    </div>
                    <div class="card-body">
                         @include('layouts.partials.messages')
                        <form action="{{ url('admin/language/'.$language->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <label for="title"> Title </label>
                                        <input type="text" class="form-control mb-3" name="title" value="{{$language->title}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="sub_title"> Sub title </label>
                                        <input type="text" class="form-control mb-3" name="sub_title" value="{{$language->sub_title}}">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="slug"> Slug </label>
                                        <input type="text" class="form-control mb-3" name="slug" value="{{$language->slug}}" >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <label for="description"> description </label>
                                        <textarea type="text" class="form-control mb-3" rows="6" name="description" value="{{$language->description}}">
                                           {{$language->description}}
                                        </textarea>
                                    </div>
                                        <div class="col-md-12 mb-4">
                                            <label for="status"> Status</label> <br>
                                            <select name="status" class="form-control">
                                                <option selected disabled> Select status </option>
                                                <option value="1" {{$language->status == '1' ? 'selected' : ''}}> Active </option>
                                                <option value="0" {{$language->status == '0' ? 'selected' : ''}}> Inactive </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 row p-4">
                                            <input type="submit" class="btn btn-primary text-white "  value="Update Language" style="float:right;" fdprocessedid="zadenu">
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