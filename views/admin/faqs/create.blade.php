@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h3 class="mb-1 font-weight-bold">Add Faqs</h3>
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
                    <h1>Add Faq</h1>
                    </div>
                    <div class="card-body text-dark">
                        @include('layouts.partials.messages')
                        <form action="{{ url('admin/faq') }}" method="post" enctype="multipart/form-data" class="row">
                            @csrf
                            <div class="col-lg-6">

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="faq_title"> Title </label>
                                        <textarea type="text" class="form-control mb-4"  name="faq_title" required></textarea> 
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="project_description"> Description </label>
                                        <textarea type="text" class="form-control mb-4" id="summernote-basic"  name="faq_description" required></textarea> 
                                    </div>
                                </div>

                           
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <label for="status"> Status</label> <br>
                                            <select name="status" class="form-control" required>
                                                <option selected disabled> Select status </option>
                                                <option value="1"> Active </option>
                                                <option value="0"> Inactive </option>
                                            </select>
                                        </div> 
                                        <div class="col-lg-12  p-3">
                                            <input type="submit" class="btn btn-primary text-white" style="float:left;"  value="Save faq">
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
        