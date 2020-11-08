<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $works=Work::all();
        return view('front.index.index',compact('works'));
    }
    public function workDetails(Request $request){
        $detail=Work::find($request->id);
        $data= view('admin.work.work-deatils',compact('detail'));
        return $data;
    }

}
