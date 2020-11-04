<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin\Admin;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'backend/dashboard'; //Redirect after authenticate

    public function __construct()
    {
        $this->middleware('isAdmin')->except('logout'); //Notice this middleware
    }

    public function showLoginForm() //Go web.php then you will find this route
    {
        return view('admin.login.login');
    }

    public function login(Request $request) //Go web.php then you will find this route
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);

    }

    public function logout(Request $request)
    {
        auth('admin')->logout();
        //$this->guard('admin')->logout();
        $request->session()->invalidate();

        return redirect('backend/login');
    }

    protected function guard() // And now finally this is our custom guard name
    {
        return Auth::guard('admin');
    }
}
