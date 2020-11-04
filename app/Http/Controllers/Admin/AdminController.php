<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdminCheck');
    }
    public function admin_dashboard(){
        return view("admin.dashboard.dashboard");
    }

}
