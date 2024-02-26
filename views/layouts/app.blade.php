@php
$setting = App\Models\Setting::find(1);
$services = App\Models\Service::find(1);
@endphp
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Social </title>
	<link rel="icon" type="image/x-icon" href="{{url('/public/images/'.$setting->fav_icon)}}">
	@stack('link')
	<link rel="stylesheet" href="{{url('/')}}/public/assets/css/bootstrap.min.css" >
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	<link rel="stylesheet" href="{{url('/')}}/public/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/assets/css/style.css">
</head>
<body>
  <!-- header -->
<header class="sticky-top top-0">
	<nav class="nav sticky-top">
		<div class="container-xl">
			<div class="row">
				<div class=" col-lg-3 col-md-6 col-sm-6  col-6 logo">
					<a href="{{url('/')}}"> <img src="{{url('/public/images/'.$setting->logo)}}" width="200px" alt="{{$setting->company_name}}"></a>
				</div>

				<div class="col-lg-9 col-md-6 col-sm-6  col-6">
					<div class="navbar pull-right d-lg-inline-block d-md-none d-sm-none d-none">
						<ul class="nav ">
							<li class="h6"> <a href="{{url('/')}}"> Home        </a> </li>
							<li class="h6"> <a href="{{url('/')}}/about"> About       </a> </li>
							<li class="h6 dropdown"> <a href="#"> Services <i class="fa-solid fa-caret-down"></i>     </a>
                                <div class="dropdown-content">
                                	<div class="row">
	                                
												@php
													$service = App\Models\Service::where('status',1)->get();
												@endphp
	                                		<ul class="list-unstyled">
												@foreach($service as $service)
											    <li> <a href="{{ url('/service/' . $service->id) }}"> {{$service->service_title}} </a> </li>
                                                 @endforeach
											</ul>
									    
									 
									</div>
								</div>
							</li>
							<li class="h6"> <a href="{{url('/')}}/blog"> Blog            </a></li>
							<li class="h6"> <a href="{{url('/')}}/contact"> Contact      </a></li>
							<li class="h6"> <a href="tel:{{$setting->phone_2}}"> <i class="fa fa-phone pe-2"> </i>{{$setting->phone_2}}    </a></li>
						</ul>
          </div>

					<div class="toggle align-items-center navbar d-lg-none pull-right">
						<div class="row " style="height:100%;">
							<a class="btn h5 my-auto" data-bs-toggle="offcanvas" data-bs-target="#demo"><i class="fa-solid fa-bars"></i></b></a>
					

					  
							<div class="offcanvas offcanvas-start p-0  bg-1" id="demo">
							  <div class="offcanvas-header p-0 mt-3">
							    <a href="{{url('/')}}"> <img src="{{url('/public/images/'.$setting->logo)}}" width="150px" alt="{{$setting->company_name}}"></a>
							    <button type="button" class="btn-close btn-close-gray pe-5" data-bs-dismiss="offcanvas"> </button>
							  </div>
							  <hr>
						     <div class="offcanvas-body p-0">
                   	<div class="d-lg-none">
											<ul class="list-unstyled">

												<li class=""> <a href="{{url('/')}}">
												  Home        </a> 
												</li>

												<li class=""> <a href="{{url('/')}}/about">
												 </i> About       </a> 
											  </li>

												<li class="dropdown"> <a href="#">
													 Services <i class="fa-solid fa-caret-down" style="font-size:unset;"></i>     </a>

					                 <div class="dropdown-content">
					                             
																@php
																	$service = App\Models\Service::where('status',1)->get();
																@endphp
					                    <ul class="list-unstyled">
																@foreach($service as $service)
															    <li class="border-0"> <a href="{{ url('/service/' . $service->id) }}"> {{$service->service_title}} </a> </li>
				                        @endforeach
													    </ul>
											
													</div>
												</li>

												<li class=""> <a href="{{url('/')}}/blog">
													 Blog            </a>
												</li>

												<li class=""> <a href="{{url('/')}}/contact"> 
													 Contact      </a>
												</li>

												<li class=""> <a href="tel:{{$setting->phone_2}}">
												 {{$setting->phone_2}}    </a>
												</li>
												
											</ul>
					          </div>
							  </div>
							</div>
						</div>
				</div> 
			</div>
		</div>
	</nav>
</header>


<!-- Main content of website -->
<div class="">
  @yield('content')
</div>

<!-- Footer -->

<footer>
		<div class="bg-2 py-4 border-bottom pb-3">
			<div class="container pt-5">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 logo">
						<img src="{{url('/public/images/'.$setting->logo)}}" style="width:180px; height:80px;">
						<h5 class="title pt-3">Address</h5>
			            <p class="text-white">
			            	<i class="fa-solid fa-location-dot pe-3"></i>
                    {!!$setting->address!!}
			            </p> 
				    </div>
					<div class="col-lg-2 col-md-6 col-sm-6 ps-lg-3 px-lg-3 quick-links">
						<h4 class="title pt-3">Quick Links</h4>
						<ul class="list-unstyled">
							<li>
								<p><a  href="{{url('/')}}/about">About Us</a></p>
							</li>
							<li>
								<p><a  href="{{url('/')}}/faq">Faqs</a></p>
							</li>
							<li>
								<p><a  href="{{url('/')}}/blog">Blog</a></p>
							</li>
							<li>
								<p><a  href="{{url('/')}}/contact">Contact Us</a></p>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 px-lg-3 me-lg-5 service">
						<h4 class="title pt-3">Featured Services</h4>
						       @php
							   $service = App\Models\Service::where('status',1)->limit(4)->get();
								@endphp
						<ul class="list-unstyled">
								@foreach($service as $service)
							<li>
								<p><a  href="{{ url('/service/' . $service->id) }}">{{$service->service_title}}</a><p>
							</li>	
							   @endforeach					
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 px-lg-2 contact">
						<h4 class="title pt-3">Contact</h4>
						<ul class="list-unstyled text-white">
			            	<li>
			            		<h5>Phone</h5>
			            		<p class="ps-3"><a  href="tel:{{$setting->phone}}">
			            			<i class="fa fa-phone "></i><span class="ps-3">{{$setting->phone}}</span>
			            		</a></p>
			            	</li>
			            	<li>
			            		<h5>Email</h5>
			            		<p class="ps-3"><a  href="mailto: {{$setting->email}}">
			            			<i class="fa-sharp fa-solid fa-envelope"></i><span class="ps-3"> {{$setting->email}}</span>
			            		</a></p> 
			            	</li>
			            </ul>
			            <ul class="list-unstyled d-flex icon-size col-lg-7">
			        		<li>
			        			<a  href="{{$setting->facebook}}" class="social-media">
			        				<i class="fa-brands fa-facebook"></i>
			        			</a>
			        		</li>
			        		<li>
			        			<a  href="{{$setting->youtube}}" class="social-media">
			        				<i class="fa-brands fa-youtube"></i>
			        			</a>
			        		</li>
			        		<li>
			        			<a  href="{{$setting->insta}}" class="social-media">
			        				<i class="fa-brands fa-instagram" style="padding: 7px 9px;"></i>
			        			</a>
			        		</li>
			        		<li>
			        			<a  href="{{$setting->linked_in}}" class="social-media">
			        				<i class="fa-brands fa-linkedin" style="padding: 7px 9px;"></i>
			        			</a>
			        		</li>
			        		<li>
			        			<a  href="{{$setting->twitter}}" class="social-media">
			        				<i class="fa-brands fa-twitter"></i>
			        			</a>
			        		</li>
			        	</ul>
					</div>
				</div>
		    </div>
		</div>
		<div class="bg-2 py-4">
			<div class="container">
				<div class="row align-items-center text-center">
					<h6 class="title">© Copyright 2023  <a  href="#">Socialin tech solution Ltd .</a> 
	                </h6>
				</div>
			</div>
		</div>

</footer>

<div  id="whatsapp" class="whatsapp" target="_blank" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Content">
<i class="fa-brands fa-whatsapp my-float"></i>
</div>

<div class="messagepop pop">

  <div class="pop-head">
  	<div class="row align-items-center" style="width:100%">
  		<div class="col-lg-3 col-md-3 col-sm-3 col-3">
  		 <img src="{{url('/public/images/'.$setting->fav_icon)}}">
  		</div>

  		 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
  		 	<h6>{{$setting->company_name}}</h6>
  		 	<p class="mb-0">Chat with us</p>
  		 </div>

  		 <div class="col-lg-3 col-md-3 col-sm-3 col-3">
  		 	<i class="fa fa-close close pull-right pe-4"></i>
  		 </div>
        
    </div>
  </div>

  <div class="pop-content p-3" style="background-image:url('	https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png');">
  	  <div class="pop-body p-3">
  	  	<p class="text-muted">Socilalinn</p>
  	  	<p> Want to improve your bussiness mthrough online? Contact with us</p>
  	  </div>
  </div>

  <div class="pop-footer p-3">
  	<a  href="{{$setting->whatsapp}}" class="btn btn-yellow" target="_blank" style="width: 100%;"> <i class="fa-brands fa-whatsapp pe-2"></i>Start Chat</a>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{url('/')}}/public/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/public/assets/js/owl.carousel.min.js"></script>
@stack('scripts')
<script src="{{url('/')}}/public/assets/js/validation/additional-methods.min.js"></script>
<script src="{{url('/')}}/public/assets/js/validation/jquery.validate.min.js"></script>
<script src="{{url('/')}}/public/assets/js/script.js"></script>
<script type="text/javascript">
	function deselect(e) {
  $('.pop').slideFadeToggle(function() {
    e.removeClass('selected');
  });    
}

$(function() {
  $('#whatsapp').on('click', function() {
    if($(this).hasClass('selected')) {
      deselect($(this));               
    } else {
      $(this).addClass('selected');
      $('.pop').slideFadeToggle();
    }
    return false;
  });

  $('.close').on('click', function() {
    deselect($('#contact'));
    return false;
  });
});

$.fn.slideFadeToggle = function(easing, callback) {
  return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};
</script>
</body>
</html>