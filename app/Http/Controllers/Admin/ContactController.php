<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\ContactUs;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ContactController extends Controller
{
    private $commonclass;
    public function __construct() {
        $this->commonclass = app('CommonClass');
        $this->middleware('isAdminCheck');
    }
    public function manageContact(){
        $contacts=ContactUs::all();
        return view('admin.contact.manage-contact',compact('contacts'));
    }
}
