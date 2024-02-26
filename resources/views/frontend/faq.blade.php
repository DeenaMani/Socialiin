@extends('layouts.app')

@section('content')  

    <section class="faqs pt--60 pb--60">
		<div class="container-xl">
	
			<div class="col-lg-12 content-1">	
				<span class="h6 mt-3">HAVE DIGITAL MARKETING QUESTIONS? LOOK HERE</span>
				<h1 class="head mt-3">Frequently Asked Questions</h1>	
				<p class="h6 mt-3 px-5">In today's digital life, it is necessary to concentrate on the digital image of your brand. If you are lacking a meaningful digital appearance, you are suffering a huge loss!
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

					<h5 class="pt-4"><b>Still have a question?<a href="{{url('/')}}/contact" class=""> Ask here </a> </b></h5>
	
				</div>
			</div>
		</div>
	</section>

    @endsection