<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\WhychooseController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ConsultingController;
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\SeoFormController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Front End */
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home');
Route::get('/blog', 'App\Http\Controllers\HomeController@blog')->name('home');
Route::get('/blog/{blog_slug}', 'App\Http\Controllers\HomeController@blogdetails')->name('home');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home');
Route::get('/service/{id}', 'App\Http\Controllers\HomeController@servicedetails')->name('home');
Route::get('/faq', 'App\Http\Controllers\HomeController@faq')->name('home');

/* Contact-form */
 Route::post('/contactform/store',[ContactFormController::class, 'store']);

 /* Seo-form */
 Route::post('/seoform/store',[SeoFormController::class, 'store']);

  /* LOGIN */
Route::group(['middleware' => ['guest'],'prefix' => 'admin'], function() {
  
    Route::get('login', 'App\Http\Controllers\Admin\LoginController@show')->name('login.show');
    Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.perform');
});

 
/* ADMIN DASHBOARD */
Route::group(['middleware' => ['auth'],'prefix' => 'admin'], function() {
   Route::get('/dashboard',[DashboardController::class,'index']);

    //setting 
   Route::resource('/setting',SettingController::class);

    //banner
    Route::resource('/banner',BannerController::class);

    //Why_Choose
    Route::resource('/whychoose',WhychooseController::class);

    //Consulting
    Route::resource('/consulting',ConsultingController::class);

    //Clients
    Route::resource('/client',ClientController::class);
    Route::get('/client/status/{id}/{status}',[ClientController::class, 'status']);

    //Faqs
    Route::resource('/faq',faqController::class);
    Route::get('/faq/status/{id}/{status}',[FaqController::class, 'status']);

    //Blog
    Route::resource('/blog',BlogController::class);
    Route::get('/blog/status/{id}/{status}',[BlogController::class, 'status']);

    //service
    Route::resource('/service',ServiceController::class);
    Route::get('/service/status/{id}/{status}',[ServiceController::class, 'status']);

    //About
    Route::resource('/about',AboutController::class);
    Route::get('/about/status/{id}/{status}',[AboutController::class, 'status']);

    //OurWork
    Route::resource('/ourwork',OurWorkController::class);
    Route::get('/ourwork/status/{id}/{status}',[OurWorkController::class, 'status']);

    //Language
    Route::resource('/language',LanguageController::class);
    Route::get('/language/status/{id}/{status}',[LanguageController::class, 'status']);

    //Contactform
    Route::get('/contactform',[ContactFormController::class, 'index']);
    Route::get('/contactform/{id}/show',[ContactFormController::class, 'show']);
    Route::get('/contactform/status/{id}/{status}',[ContactFormController::class, 'status']);

    //Seoform
    Route::get('/seoform',[SeoFormController::class, 'index']);
    Route::get('/seoform/{id}/show',[SeoFormController::class, 'show']);
    Route::get('/seoform/status/{id}/{status}',[SeoFormController::class, 'status']);


});

