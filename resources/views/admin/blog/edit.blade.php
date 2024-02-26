@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Blog</h3>
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
                        <h4>Edit Blog</h4>                   
                    </div>
                    <div class="card-body">
                         @include('layouts.partials.messages')
                        <form action="{{ url('admin/blog/'.$blog->id) }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_image"> Image </label>
                                            <input type="file" class="form-control mb-3" name="blog_image" value="{{$blog->blog_image}}">
                                            <img src="{{ url('/') }}/public/image/blog/{{$blog->blog_image}}" width="50px"> <br> 
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">       
                                            <label for="blog_title"> Title </label>
                                            <input type="text" class="form-control mb-4" name="blog_title" value="{{$blog->blog_title}}" required>  
                                        </div>
                                    </div>
                                        
                                    
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_slug"> Slug </label>
                                            <input type="text" class="form-control mb-4" name="blog_slug" value="{{$blog->blog_slug}}" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_short_description"> Description </label>
                                            <textarea type="text" class="form-control mb-4" rows="6" name="blog_short_description"> {{$blog->blog_full_description}} </textarea> 
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_full_description"> Full Description </label>
                                            <textarea type="text" id="summernote-basic" class="form-control mb-4" row="6" name="blog_full_description" required>{{$blog->blog_full_description}} </textarea>    
                                        </div> 
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_added_by"> Added_by </label>
                                            <input type="text" class="form-control mb-4" name="blog_added_by" value="{{$blog->blog_added_by}}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_date"> Date </label>
                                            <input type="date" id="start" class="form-control mb-4" name="blog_date" value="{{$blog->blog_date}}" min="2023-05-24">
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <label for="status"> Status</label> <br>
                                            <select name="status" class="form-control">
                                                <option selected disabled> Select status </option>
                                                <option value="1" {{$blog->status == '1' ? 'selected' : ''}}> Active </option>
                                                <option value="0" {{$blog->status == '0' ? 'selected' : ''}}> Inactive </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 p-4">
                                            <input type="submit" class="btn btn-primary text-white" style="float:right;" value="Update Blog" fdprocessedid="zadenu">
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