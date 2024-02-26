@extends('layouts.app')

@section('content')  



<div class=" blogs pb--60 pt--60 bg-2 border-bottom">
	<div class="container pb-4">
		<div class="row">
			<div class="col-lg-9 border-end">
				<div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-6">
						<div class="blog-box">
							<div class="blog-image">
						    	<a href="{{ url('/blog/' . $blog->blog_slug) }}"> <img src="{{url('/public/image/blog/'.$blog->blog_image)}}" > </a>
						    </div>	
						    <span class="blog-date-added"> <i class="fa fa-calender"> </i> {{$blog->blog_date}} </span>
						    <span class="blog-date-added pull-right"> <i class="fa fa-user">     </i>{{$blog->blog_date}}  </span>
						    <h4 class="blog-title my-3 title"> {!!$blog->blog_title!!} </h4>
						    <p  class="blog-description"> {!!$blog->blog_short_description!!} </p> 
						 </div>
					</div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3">
                <div class="blog_category">
                    <h4>Blogs</h4>
                    <ul>
                        @foreach($blogs as $blog)
                        <li class=""> 
                            <a href="{{ url('/blog/' . $blog->blog_slug) }}"> {!!$blog->blog_title!!}</i></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
  		</div>
	</div>
</div>
@endsection
