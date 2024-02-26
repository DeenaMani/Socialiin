 @extends('layouts.app')

@section('content')  

<div class=" blog-detail bg-1 pb--60">
	<!-- <div class="container pb-4"> -->
	<div class="blog-top pt--60 text-white" style="background: black;">
		<div class="container">
			<div class="blog-detail-title text-center pb-5">
				<div class="blog-image">
					<a href="#"> <img src="{{url('/public/image/blog/'.$blogs->blog_image)}}" width="100%"> </a>
				</div>
				<h2 class="my-5"> {!!$blogs->blog_title!!} </h2>

				<div class="text-muted my-2">
					<span class="px-3"> <i class="fa fa-user"> </i> {{$blogs->blog_added_by}} </span> <span class="px-3"> <i class="fa-regular fa-calendar"> </i> {{$blogs->blog_date}}</span>  
				</div>
			</div>
		</div>
	</div> 

   <div class=" bg-1 pt--60">
   	<div class="container">
	      <div class="blog-detail-contant">
	            {!!$blogs->blog_full_description!!}
	      </div>
	   </div>
   </div>
</div>


@endsection
	        