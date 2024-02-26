<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Consulting;
use App\Models\Ourwork;
use App\Models\About;
use App\Models\Whychoose;
use App\Models\Faq;
use App\Models\Client;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Language;
use Session;
use Hash;


class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
        $banner = Banner::first();
        $services = Service::where('status',1)->get();
        $consulting = Consulting::first();
        $ourworks = Ourwork::where('status',1)->get();
        $abouts = About::where('status',1)->get();
        $whychoose = Whychoose::first();
        $faqs = Faq::where('status',1)->get();
        $clients = Client::where('status',1)->get();
        return view('frontend.index',compact('banner','services','consulting','ourworks','abouts','whychoose','faqs','clients'));
    }

    public function about(Request $request)
    {
        $consulting = Consulting::first();
        $abouts = About::where('status',1)->get();
        $whychoose = Whychoose::first();
        return view('frontend.about',compact('consulting','abouts','whychoose'));
    }

    
    public function blog(Request $request)
    {
        $blogs = Blog::where('status',1)->paginate(10);
        return view('frontend.blog',compact('blogs'));
    }

    public function blogdetails($slug)
    {
        $blogs = Blog::where('blog_slug',$slug)->where('status',1)->first();
        return view('frontend.blog_details',compact('blogs'));
    }

    public function service(Request $request)
    {
        $services = Service::where('status',1)->get();
        return view('frontend.service',compact('services'));
    }

    public function faq(Request $request)
    {
        $faqs = faq::where('status',1)->get();
        return view('frontend.faq',compact('faqs'));
    }

    public function servicedetails($id)
    {
        $services = Service::find($id);
        $languages = Language::where('status',1)->get();;
        return view('frontend.service_details',compact('services','languages'));
    }

    public function contact(Request $request)
    {
        $setting = Setting::find(1);
        return view('frontend.contact',compact('setting'));
    }

}
