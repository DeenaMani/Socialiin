@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Faqs</h3>
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
                        <h4>Edit Faq</h4>                   
                    </div>
                    <div class="card-body">
                        @include('layouts.partials.messages')
                        <form action="{{ url('admin/faq/'.$faq->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="col-lg-6">
                                
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="faq_title"> Title </label>
                                        <input type="text" class="form-control mb-4" name="faq_title" value="{{$faq->faq_title}}" required>  
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="faq_description"> Description </label>
                                        <textarea type="text" class="form-control mb-4" name="faq_description" id="summernote-basic" required> {{$faq->faq_description}} </textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <label for="status"> Status</label> <br>
                                        <select name="status" required class="form-control">
                                            <option selected disabled> Select status </option>
                                            <option value="1" {{$faq->status == '1' ? 'selected' : ''}}> Active </option>
                                            <option value="0" {{$faq->status == '0' ? 'selected' : ''}}> Inactive </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 p-3 justify-content-end">
                                        <input type="submit" class="btn btn-primary text-white" value="Update faq" fdprocessedid="zadenu">
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