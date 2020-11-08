<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    private $commonclass;
    public function __construct() {
        $this->commonclass = app('CommonClass');
        $this->middleware('isAdminCheck');
    }
    public function manageWorks(){
        $works=Work::all();
        return view('admin.work.manage-works',compact('works'));
    }
    public function addWork(){
        return view('admin.work.add-work');
    }
    public function saveWork(Request $request){
        $file = $this->workImageUpload($request);
        $request->merge(['photo_url' => $file]);
        $id=$this->commonclass->save(Work::class,  $request->except('image_url'))->id;
        return redirect()->route('admin.manage.works')->with('success', config('messages.2'));
    }
    public function updateWork(Request $request){
        $work = Work::find($request->id);
        if ($request->file('image_url')){  
            if($work->photo_url!='/assets/default.png'){
                unlink('storage/' . $work->photo_url);
                $file = $this->workImageUpload($request);
            }else{
                $file = $this->workImageUpload($request);
            }
        }else{
            $file=$work->photo_url;
        }
        $request->merge(['photo_url' => $file]);
        $id=$this->commonclass->save(Work::class,  $request->except('image_url'))->id;
        return redirect()->route('admin.manage.works')->with('success', config('messages.2'));
    }
    public function editWork($id){
        $edit_work=Work::find($id);
        return view('admin.work.edit-work',compact('edit_work'));
    }
    protected function workImageUpload($request){
        $date = Carbon::now()->toDateTimeString();
        $dt=str_replace([':', '\\', '/', ' ','*'], '', $date);
        if ($request->file('image_url')) {  
            $extension = $request->file('image_url')->extension();
            return $file = $request->file('image_url')->storeAs(
                'work-image', 'work_'.$request->title.$dt.'.'.$extension
            );
        }else{
            return $file='/assets/default.png';
        }
        
    }
    public function deleteWork($id){
        Work::find($id)->delete();
        return redirect()->route('admin.manage.works')->with('success', config('messages.2'));
    }
    
}
