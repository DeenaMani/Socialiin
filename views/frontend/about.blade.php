@extends('layouts.app')

@section('content')    

@section('content') 

    <section class="pt--60 pb--60 consulting">
		<div class="container-xl">
		    
		    <div class="row">
	
				<div class="col-lg-6 content  line-height">
					
					<span class="h5">{{$consulting->consulting_sub_title}}</span>
					
					<h2 class="head mt-3">{{$consulting->consulting_title}}</h2>
					
                   <div>
					 {!!$consulting->consulting_description!!}
                   </div>

					<a href="#" class="btn btn-yellow h5" data-bs-parent="target"> <b> Get Free Consulting Now </b> </a>
				</div>

				<div class="col-lg-6">
			    	<img src="{{url('/public/image/consulting/'.$consulting->consulting_image)}}" alt="consulting image" class="consulting-image">
			    </div>


			</div>

		</div>
	</section>

    <section class="why_choose pb--60 pt--60">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-6 text-justify">
            <span class="h6 mt-3">{{$whychoose->whychoose_title}}</span>
            <h3 class="title head mt-3">{{$whychoose->whychoose_sub_title}}</h3>
            <p class="mt-3" id="summernote" > {!!$whychoose->whychoose_description!!} </p>
          </div>
          <div class="col-lg-6">
            <img src="{{url('/public/image/whychoose/'.$whychoose->whychoose_image)}}" alt="why_choose image" class="why_choose-image">
          </div>
        </div>
      </div>
    </section>


    <div class="about bg-1">
        <div class="container py-5 ">
        <div class="row">
            @foreach ($abouts as $key => $about)
            <div class="col-lg-6">
            <div class="consulting-item ">
                <div class="row">
                <div class="col-lg-2">
                    <i class="fas fa-envelope"></i>
                </div>
                    <div class="col-lg-10">
                    <h2 class=""><b>{{$about->about_title}}</b></h2>
                    <p>{!!$about->about_description!!}</p>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>

@endsection