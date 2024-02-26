@extends('layouts.app')

@section('content')    
@php
$setting = App\Models\Setting::find(1);
@endphp
   <div class="banner text-white" style="background-image: url('{{url('/public/image/banner/'.$banner->banner_image)}}');">
		<div class="container-xl">
			<div class="row d-flex">
				<div class="col-lg-12">
					<div class="content">
						<h1 class="">{!!$banner->banner_title!!}</h1>
						<p class="py-4">{!!$banner->banner_description!!} 
						</p>
						<a class="btn h5"  data-bs-toggle="modal" data-bs-target="#exampleModal"><b>GET STARTED <i class="fa fa-arrow-right ps-2"></i></b></a>
                         
				        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						    	<div class="row">
							        <div class="contact-form">

										<h2 class="pb-5 text-center"> Wish to proceed, Let us know about you. </h2>

										<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										    <span aria-hidden="true">×</span>
										</button>
										<form method="post" id="contactForm" action="{{ url('/contactform/store') }}">
											@csrf
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group ">
														<label for="name" class="h5"> Name </label>
														<input type="name" class="form-control"  id="name" name="user_name" placeholder="Enter Name"  />
														<div class="validation-error d-none">
															<p>This Field Is Required</p>
														</div>
													</div>
												</div>

												<div class="col-lg-6">
													<div class="form-group ">
														<label for="email" class="h5"> E Mail </label>
														<input type="email" class="form-control"  id="email" name="user_email" placeholder="Enter E-mail"  />
														<div class="validation-error d-none">
															<p>This Field Is Required</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group ">
														<label for="phone" class="h5"> Phone </label>
														<input type="tel" class="form-control"  id="phone" name="user_phone" placeholder="Enter Phone" />
														<div class="validation-error d-none">
															<p>This Field Is Required</p>
														</div>
													</div>
												</div>

												<div class="col-lg-6">
													<div class="form-group ">
														<label for="service" class="h5"> Service </label>
														<select name="service" class="form-select form-control">
															<option >-- Select Service --</option>
															<option value="Web Developement">Web Developement</option>
															<option value="Digital Marketing">Digital Marketing</option>
															<option value="Search Engine Optimization">Search Engine Optimization</option>
															<option value="Google AdWords">Google AdWords</option>
															<option value="Social Media Marketing">Social Media Marketing</option>
															<option value="Application Development">Application Development</option>
															<option value="Public Reputation Management">Public Reputation Management</option>
															<option value="Political Service">Political Service</option>
														</select>
													</div>
												</div>
												</div> 
												<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label for="message" class="h5"> Message </label>
														<textarea  class="form-control" placeholder="Enter Your Message here...." name="message" > </textarea>
													</div>
												</div>

												
												<div class="col-lg-12">
													<div class="form-group text-center px-5 pt-4">
														<button  class="btn btn-yellow" data-effect="wave" type="submit"> Submit Now
														</button>
													</div>
												</div>
											</div>
										</form>
								    </div>
								   </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <section class="service pb--60 pt--60">
		<div class="container-xl">
		@php
		$language = App\Models\Language::where('status',1)->find(1);
		@endphp
			<div class="col-lg-12 content-1">
				
				<span class="h5">{{$language->title}}</span>
				
				<h1 class=" title head mt-3">{{$language->sub_title}}</h1>
				
				<p class="mt-3 h6 px-lg-5 px-sm-0 px-0">{{$language->description}}
				</p>
			</div>
  
      <div class="col-lg-12 px-0 px-lg-5">
        <div class="row">
        @foreach ($services as $key => $service)
					<div class="col-lg-4 col-md-4 col-sm-6 col-12">
						<div class="service-box">
						   <a href="{{ url('/service/' . $service->id) }}"> 

								<img src="{{url('/public/image/service/'.$service->service_logo)}}" alt="service_logo" class="service-logo">
								<h5 class="title">{{$service->service_sub_title}}</h5>
								<p class="text-white">{!!$service->service_short_description!!}</p>
								
							    <div class="service-arrow">
								<span class="title pull-right"> <i class="fa fa-arrow-right "> </i> </span> 
							    </div>

							</a>
						</div>
			    </div>
          @endforeach
        </div>

			</div>
		</div>
	</section>

    <section class="pt--60 pb--60 consulting">
		<div class="container-xl">
		    
		    <div class="row">
	
				<div class="col-lg-6 content  line-height">
					
					<span class="h5">{{$consulting->consulting_sub_title}}</span>
					
					<h2 class="head mt-3">{!!$consulting->consulting_title!!}</h2>
					
                   <div>
					 {!!$consulting->consulting_description!!}
                   </div>

					<a href="#consulting" class="btn btn-yellow h5" data-bs-parent="target"> <b> Get Free Consulting Now </b> </a>
				</div>

				<div class="col-lg-6">
			    	<img src="{{url('/public/image/consulting/'.$consulting->consulting_image)}}" alt="consulting image" class="consulting-image">
			    </div>


			</div>

		</div>
	</section>

  
	<section class="services-4 pt--60 pb--60">
			<div class="container-xl">

				<div class="row">	
				@php
				$language = App\Models\Language::where('status',1)->find(2);
				@endphp
					<div class="col-lg-10 text-white">	
						<span class="h5 mt-3">{{$language->title}}</span>
						<h1 class="title head mt-3">{{$language->sub_title}}</h1>	
						<p class="h6 mt-3 l">{{$language->description}}
						</p>
							
					</div>
				</div>


				<div class="services-boxes mt-5" id="slider">
					<div class="container-xl">
	 					<div class="slider">
	 						<div class="owl-carousel services-carousel">

                                @foreach ($ourworks as $key => $ourwork)
	 							<div class="slider-card">
	 								<div class="d-flex justify-content-start align-item-center">
									     <img src="{{url('/public/image/ourwork/'.$ourwork->ourwork_image)}}">
									</div>
									<h5 class="h5 mt-3">{!!$ourwork->ourwork_title!!}</h5>
									<p class=""> <small>{!!$ourwork->ourwork_description!!}</small>
									</p>
								</div>
                                @endforeach
						
							</div>
						</div>
					</div>
				</div>
		 	</div>	   	
	</section>

	<div class="about_contant bg-1">
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

	<section class="why_choose pb--60 pt--60">
	<div class="container-xl">
		<div class="row">
			<div class="col-lg-6 text-justify">
				<span class="h6 mt-3">{{$whychoose->whychoose_title}}</span>
				<h3 class="title head mt-3">{!!$whychoose->whychoose_sub_title!!}</h3>
				<p class="mt-3" id="summernote" > {!!$whychoose->whychoose_description!!} </p>
			</div>
			<div class="col-lg-6">
				<img src="{{url('/public/image/whychoose/'.$whychoose->whychoose_image)}}" alt="why_choose image" class="why_choose-image">
			</div>
		</div>
	</div>
    </section>  

    <section class="faqs pt--60 pb--60">
		<div class="container-xl">
		        @php
				$language = App\Models\Language::where('status',1)->find(3);
				@endphp
			<div class="col-lg-12 content-1">	
				<span class="h6 mt-3">{{$language->title}}</span>
				<h1 class="head mt-3">{{$language->sub_title}}</h1>	
				<p class="h6 mt-3 px-lg-5 px-0">{{$language->description}}
				</p>
			</div>

			<div class="col-lg-12">
				<div class="row  justify-content-center">

                @foreach($faqs as $key => $faq)
				<div class="faqs-section col-lg-9 pb-4">
					<div class="card" role="tablist">
						<a href="#" class=" card-header title" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#collapseOne">
						<h5> {{$faq->faq_title}}</h5>
						</a>
							<div id="collapseOne" class="collapse card-body"  data-parent="#accordion">
						{!!$faq->faq_description!!}
						</div>
					</div>
               </div>
               @endforeach
                        
                <div class="more text-center pt-3">

					<a href="{{url('/')}}/faq" class="btn btn-yellow h5" ><b> View All </b> </a>

					<h5 class="pt-4"><b>Still have a question?<a href="{{url('/')}}/contact"> Ask here </a> </b></h5>
	
				</div>
			</div>
		</div>
	</section>

    <section class="seo pt--60" id="consulting">
         <div class="container-xl">
         	<div class="row">
			    @php
				$language = App\Models\Language::where('status',1)->find(4);
				@endphp
         		<div class="col-lg-12 text-center">
	         		<h1 class="title head">{{$language->sub_title}}</h1> 
	         		<p class="pt-3 h5">{{$language->description}}</p>
         		</div>

         		<div class="col-lg-12 ">
         			<div class="seo-form ">
	         			<form method="post" id="seoForm" action="{{ url('/seoform/store') }}">
	                        @csrf
	                        <div class="row">

				                <div class="col-lg-6">
				                	<div class="form-group ">
					                  	<input type="name" class="form-control"  id="name" name="user_name" placeholder="Enter Name"  />
						                <div class="validation-error d-none">
						                   <p>This Field Is Required</p>
					                    </div>
				                    </div>
				                </div>

				                <div class="col-lg-6">
				                	<div class="form-group ">
					                  	<input type="email" class="form-control"  id="email" name="user_email" placeholder="Enter E-mail"  />
						                <div class="validation-error d-none">
						                   <p>This Field Is Required</p>
					                    </div>
				                    </div>
				                </div>

				                <div class="col-lg-6">
				                	<div class="form-group ">
					                  	<input type="tel" class="form-control"  id="phone" name="user_phone" placeholder="Enter Phone"  />
						                <div class="validation-error d-none">
						                   <p>This Field Is Required</p>
					                    </div>
				                    </div>
				                </div>

				                <div class="col-lg-6">
				                	<div class="form-group ">
					                  	<input type="text" class="form-control"  id="url" name="user_website_url" placeholder="Enter Website Url"/>
						                <div class="validation-error d-none">
						                   <p>This Field Is Required Must Be url</p>
					                    </div>
				                    </div>
				                </div> 
                                
                                <div class="col-lg-12">
					                <div class="form-group text-center px-5 pt-4">
					                  <button class="btn btn-yellow" data-effect="wave" type="submit"> Submit
					                  </button>
					                </div>
					            </div>
				            </div>
		                </form>
		            </div>
         		</div>
         	</div>
         </div>
	</section>

    <section class="clients pt--60 pb--60">
		<div class="container-xl">
		       @php
				$language = App\Models\Language::where('status',1)->find(5);
				@endphp
			<div class=" text-center">
				<h1 class="head"> {{$language->title}}</h1>
			</div>

			<div class="our-clients">
				<div class="slider">
					<div class="owl-carousel clients-carousel">
          @foreach ($clients as $client)
						<div class="slider-card">
							<div class="d-flex justify-content-start align-item-center">
						       <img src="{{url('/public/image/clients/'.$client->client_image)}}">
							</div>
						</div>
            @endforeach
					</div>
				</div>
			</div>
	
		</div>
	</section>


        
@endsection