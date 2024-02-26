@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Clients</h3>
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
                        <h4>Edit Client</h4>                   
                    </div>
                    <div class="card-body">
                         @include('layouts.partials.messages')
                        <form action="{{ url('admin/client/'.$clients->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="col-lg-6">

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="client_image"> Image </label>
                                        <input type="file" class="form-control mb-3" name="client_image" value="{{$clients->client_image}}">
                                        <img src="{{url('/public/image/clients/'.$clients->client_image)}}" width="50px"> <br> 
                                    </div>
                                
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="client_title"> Title </label>
                                        <input type="text" class="form-control mb-4" name="client_title" value="{{$clients->client_title}}" required> 
                                    </div>
                                </div>
                                
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="status"> Status</label> <br>
                                            <select name="status" class="form-control">
                                                <option selected disabled> Select status </option>
                                                <option value="1" {{$clients->status == '1' ? 'selected' : ''}}> Active </option>
                                                <option value="0" {{$clients->status == '0' ? 'selected' : ''}}> Inactive </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 row p-4">
                                            <input type="submit" class="btn btn-primary text-white "  value="Update Clients" style="float:right;" fdprocessedid="zadenu">
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