@extends('layouts.app')

@section('content')    


	<div class="location bg-2">
        <section class="to-contact">
            <div class="row me-0">
                <div class="contact-form col-lg-6">

                    <h2 class="pb-5 text-center"> Get In Touch With Us </h2>

                    <form method="post" id="contactForm" action="{{ url('/contactform/store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label for="name" class="h5"> Name </label>
                                    <input type="name" class="form-control"  id="name" name="user_name" placeholder="Enter Name"  />
                                    <div class="validation-error d-none">
                                        <p>This Field Is Required</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
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
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label for="phone" class="h5"> Phone </label>
                                    <input type="tel" class="form-control"  id="phone" name="user_phone" placeholder="Enter Phone" />
                                    <div class="validation-error d-none">
                                        <p>This Field Is Required</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
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
                                    <textarea  class="form-control" placeholder="Enter Your Message here...." name="message" ></textarea>
                                </div>
                            </div>

                            
                            <div class="col-lg-12">
                                <div class="form-group text-center px-5 pt-4">
                                    <button class="btn btn-yellow" data-effect="wave" type="submit"> Submit Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
    	
    		    <div class="col-lg-6">
    				<iframe src="{{$setting->google_map_link}}" class="map py-1" style="min-height:500px"></iframe>
                </div>
    	   </div>
        </section>

    <section class="contact pt--60 border-bottom">
    <div class="container">
        <div class="text-center">
            <h1 class="head"> Contact Us </h1>
        </div>

        <div class="contact-us">
                <div class="row ">
                    <div class="col-lg-4 col-12">
                        <div class="col-lg-2 col-2">
                            <span class="h2"> <i class="fa fa-location-dot"></i> </span>
                        </div>
                        <div class="col-lg-10 col-10">
                        <h2> Address </h2>
                            <p class="py-3">  
                                {!!$setting->address!!}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="col-lg-2 col-2">
                            <span class="h2"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <div class="col-lg-10 col-10">
                            <h2> Phone </h2>
                            <p class="pt-3  mb-0"> <a href="tel:{{$setting->phone}}" class="pe-2"> {{$setting->phone}}<!--, </a> <a href="tel:{{$setting->phone_2}}">  +{{$setting->phone_2}} --> </a> </p>
                                        
                             <p class="text-muted"> Working Hours: Mon-Fri, 9am to 6pm</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="col-lg-2  col-2">
                            <span class="h2"> <i class="fa fa-envelope"> </i></span>
                        </div>
                        <div class="col-lg-10">
                            <h2>  Mail </h2>
                            <p class="pt-3 m-0">   <a href="mailto:{{$setting->email}}" class="pe-2"> {{$setting->email}} </a></p>
                            <p class="text-muted"> Get support via Email</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection