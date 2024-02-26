@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold"> Blog</h3>
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
                    <h1>Add Blog</h1>
                    </div>
                    <div class="card-body text-dark">
                         @include('layouts.partials.messages')
                        <form action="{{ url('admin/blog') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_image">Image </label>
                                            <input type="file" class="form-control mb-3" name="blog_image">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog-title"> Title </label>
                                            <input type="test" class="form-control mb-3" name="blog_title">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_slug"> Slug </label>
                                            <input type="text" class="form-control mb-4" name="blog_slug">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <label for="blog_short_description"> Short Description </label>
                                            <textarea type="text" class="form-control mb-3" rows="6" name="blog_short_description"></textarea>
                                        </div>
                                    </div>

                                </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <label for="blof_full_description"> Full Description </label>
                                                <textarea type="text" id="summernote-basic" class="form-control mb-4" row="6" name="blog_full_description" required> </textarea>    
                                            </div> 
                                        </div> 

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <label for="blog_added_by"> Added_by </label>
                                                <input type="text" class="form-control mb-4" name="blog_added_by" required>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <label for="blog_date"> Date </label>
                                                <input type="date" id="start" class="form-control mb-4" name="blog_date" min="2023-05-24">
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
                                            <div class="col-lg-12 p-2 justify-content-end">
                                                <input type="submit" class="btn btn-primary text-white" style="float:right;" value="Save Blog">
                                            </div>
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
        