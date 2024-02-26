<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Customer;
class DashboardController extends Controller
{
    
    public function index(){
        
        return view('admin.dashboard');
    }




}
