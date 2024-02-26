// owl crusal 
$(document).ready(function(){
	$('.services-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    center:true,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    navText:[
    	"<i class='fa fa-angle-left'></i>",
    	"<i class='fa fa-angle-right'></i>"
    	],
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        },
    }
})
});

$(document).ready(function(){
    $('.clients-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    center:true,
    nav:false,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:5,
        },
       
    }
})
});

//seo form
$(document).ready(function(){
$('#seoForm').validate({
      focusInvalid: false,
      rules: {
        'user_email': {
          required: true,
          email: true
        },
        'user_name': {
          required: true,
        },
        'user_phone': {
            required: true,
        },
        'user_website_url': {
            required: true,
            url: true
        },
      },
      errorPlacement: function errorPlacement(error, element) {
        $(element).siblings(".validation-error").removeClass("d-none")
        return true
      },
      highlight: function (element) {
        var $el = $(element);
        var $parent = $el.parents('.form-group');
        $parent.addClass("invalid-field")
      },
    })
});

//contact form
$(document).ready(function(){
$('#contactForm').validate({
      focusInvalid: false,
      rules: {
        'user_email': {
          required: true,
          email: true
        },
        'user_name': {
          required: true,
        },
        'user_phone': {
            required: true,
        },
      },
      errorPlacement: function errorPlacement(error, element) {
        $(element).siblings(".validation-error").removeClass("d-none")
        return true
      },
      highlight: function (element) {
        var $el = $(element);
        var $parent = $el.parents('.form-group');
        $parent.addClass("invalid-field")
      },
    })
});