<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Auth;
use Hash;
class LoginController extends Controller
{
    //

    public function show()
    {
        return view('admin.login');
    }

    public function success()
    {
        echo "success";
    }
    public function login(LoginRequest $request)
    {
        
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('admin/login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return redirect('admin/dashboard');
        //return $this->authenticated($request, $user);
    }   


}
