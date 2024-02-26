@extends('layouts.app')

@section('content')  

<section class="services bg-2 pt--60 pb--60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="services-image text-center">
                        <img width="75%" src="{{url('/public/image/service/'.$services->service_image_1)}}" alt="service-image"> 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-title">
                        <h1>{{$services->service_title}}</h1>
                    </div>
                    <div class="services-text h6 mt-3">
                        <p style="line-height:35px;"> {!!$services->service_description!!}</p>
                    <div class="services-btn">
                        <a href="{{url('/')}}/contact" class="btn btn-yellow">GET QUOTE</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="bg-1 pb--60 pt--60">
        <div class="container">
            <div class="web-services text-center">
                <div class="head">
                <span class=""> WANTS TO GROW YOUR BUSINESS ONLINE? </span>
                <h2> We Grow Your Business Online </h2>
                <p>We lift businesses to achieve qualified leads and brand recognition by enhancing their digital presence. We design customized websites with comprehensive search engine optimization, online branding, and content strategy to guarantee business growth !</p>
                </div>
                <div class="web-services-contant">
                    <img src="{{url('/public/image/service/'.$services->service_image_2)}}" width="100%" height="400px">
                </div>
            </div>
        </div>
    </div>

    <section id="web-service" class="bg-2 web-services pb--60 pt--60 border-bottom">
        <div class="container">
            <div class="services-title text-center mt-0"><h1>{{$services->service_title}} Company</h1></div>
            <div class="web-services-contant text-white"> 
            {!!$services->service_full_description!!}
            </div>
        </div>
    </section>

    
 <!--<section class="bg-1 pb--60 pt--60 programing-language">
    <div class="container">
        <div class=" web-services">
            <div class="head">
            <div class="text-center head pb--60">
                <h1 >Technologies We Work With</h1>
                <p >So far we have worked with various technologies we also keep exploring the other ones here are some of them..
                </p>
            </div>
            </div>
            <div class="language-we-work">
                <div class="web-services-contant">
                    <div class="row">
                        @foreach($languages as $language)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="programing-language p-3">
                                <img src="{{url('/public/image/language/'.$language->language_image)}}" alt="programing-language-image" width="100%" height="auto">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection