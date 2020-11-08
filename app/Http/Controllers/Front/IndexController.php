<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Admin\ContactUs;
use App\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $commonclass;
    public function __construct() {
        $this->commonclass = app('CommonClass');
    }
    public function index(){
        $works=Work::all();
        return view('front.index.index',compact('works'));
    }
    public function workDetails(Request $request){
        $detail=Work::find($request->id);
        $data= view('admin.work.work-deatils',compact('detail'));
        return $data;
    }
    public function saveContactUs(Request $request){
        $id=$this->commonclass->save(ContactUs::class,  $request->all());
        return redirect()->route('index')->with('success', config('messages.4'));
    }

}
