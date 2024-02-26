@extends('layouts.admin')

@section('title','Imazine | Dashboard')

@section('main-content')
<div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-5 col-xl-6">
                        <div class="page-title">
                            <h2 class="mb-1 font-weight-bold text-white">Blog</h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="page-content-warpper mt--45">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header row">
                        <div>
                            @if(session()->has('message'))
                            <div class="alert alert-success" id="alert">
                                <button type="button" class="close" data-dismiss="alert"> X </button>
                                {{session()->get('message')}}
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-9">
                        <h4>Blog</h4> 
                        </div>

                        <div class="col-lg-3">
                            <a href="{{url('admin/blog/create')}}" class="btn btn-primary me-5" style="float:right;"> Add <i class="bx bx-plus"></i></a>
                        </div>
                    </div>                
                 
                    <div class="card-body">
                         @include('layouts.partials.messages')
                        <table class="table text-center mb-0" id="datatable">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Image </th>
                                    <th> Title </th>
                                    <th> Added_by </th>
                                    <th> Status </th>
                                    <th> Action </th>
                            </thead>
                            @foreach ($result as $key => $data)
                            <tbody>
                                <tr>
                                    <td> {{$data->id}} </td>
                                    <td>  <img src="{{ url('/public/image/blog/'.$data->blog_image)}}" width="50px"> </td>
                                    <td> {{$data->blog_title}} </td>
                                    <td> {{$data->blog_added_by}} </td>
                                    <td> 
                                        <div class="form-check form-switch">
                                            <input  data-id="{{$data->id}}"   class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" 
                                            data-on="Active" data-off="InActive" {{ $data->status ? 'checked' : '' }}>
                                        </div>                                  
                                     </td>
                                    <td class="d-flex justify-content-center"> 
                                        <div>
                                        <a href="{{ url('admin/blog/'.$data->id.'/edit') }}" class=" btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a> </div>
                                        <form action="{{ url('admin/blog/'.$data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="mx-3 btn btn-danger" onclick="return confirm('Are you sure to delete ?')"><i class="fa-solid fa-trash"></i></button> 
                                        </form>
                                    </td> 
                                </tr>
                            </tbody>
                            @endforeach
                        </table>                  
                
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-5">
                                Showing {{($result->currentpage()-1)*$result->perpage()+1}} to {{$result->currentpage()*$result->perpage()}}
                                of  {{$result->total()}} entries
                            </div>
                            <div class="col-sm-12 col-md-7">
                                {!! $result->onEachSide(1)->links('admin.pagination') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
            @endsection

@push('scripts')
<script>
  $(document).on("change",".toggle-class",function() {

if($(this).is(":checked")) { var status = 1;}
else{   var status = 0;  }  
var id= $(this).attr("data-id")
//alert(id);
$.ajax({
    url: "{{URL('/')}}/admin/blog/status/" + id + "/" +status ,
        success: function(e) {
    }
});
});
</script>
@endpush