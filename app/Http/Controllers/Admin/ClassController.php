<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $class = DB::table('classes')->get();
//        dd($class);
        return view('admin.class.index',compact('class'));

    }
    //__create form page__//
    public function create(Request $request)
    {
        return view('admin.class.create');
    }

    //__store class--//
    public function store(Request $request)
    {
        $validate = $request->validate([
            'class_name'=>'required|unique:classes',
        ]);
        $data = array(
            'class_name' => $request->class_name,
        );
        DB::table('classes')->insert($data); 
        return redirect()->back()->with('success','successfully Inserted');
    }

    //__delete information__//
    public function delete($id){
        DB::table('classes')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfully Deleted');
    }

    //__edit information__//
    public function edit($id){
        $data = DB::table('classes')->where('id',$id)->first();
        return view('admin.class.edit',compact('data'));
    }

    //__updata method__//
    public function update(Request $request,$id){
        $request->validate([
            'class_name'=>'required',
        ]);
        $data = array('class_name'=>$request->class_name);
        DB::table('classes')->where('id',$id)->update($data);
        return redirect()->back()->with('success','successfully update');
    }

}
