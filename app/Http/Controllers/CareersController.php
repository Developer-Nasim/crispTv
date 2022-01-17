<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Carbon\Carbon;

class CareersController extends Controller
{
 

    // Backend view
    public function index(){
        $getDatas = DB::table('careers')->get()->all();
        return view('backend.career', compact('getDatas'));
    }
    
    // Core Value view
    public function coreValuesIndex(){
        $getDatas = DB::table('core_values')->get()->all();
        return view('backend.core-value', compact('getDatas'));
    }
    
    // Career Edit view
    public function editIndex($id){
        $getDatas = DB::table('careers')->where('id', $id)->get()->first();
        return view('backend.edit-career', compact('getDatas'));
    }

    // Core Value Edit view
    public function CoreValueeditIndex($id){
        $getDatas = DB::table('core_values')->where('id', $id)->get()->first();
        return view('backend.edit-core-value', compact('getDatas'));
    }

    // Career Save
    public function SubmitData(Request $req){ 
   
        DB::table('careers')->insert([ 
            "title"          =>$req->title, 
            "content"        =>$req->content,
            "created_at"     => Carbon::now(),
        ]); 
 
        return redirect()->back();
 
    }

    // Career update data
    public function SubmitEditData(Request $req){ 
  
        DB::table('careers')->where([
            ['id', $req->id],
        ])->update([ 
            "title"          =>$req->title, 
            "content"        =>$req->content,
            "updated_at"     => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // Career Delete
    public function Delete($id){ 
        $check = DB::table('careers')->where('id', $id)->first();
        if ($check) {  
            DB::table('careers')->where('id', $id)->delete();
        }
        return redirect()->back();
    }

    // Core value Save
    public function SubmitCoreValueData(Request $req){ 
        $imageName;  
        if ($req->img) { 
            $imgName = "career_".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/career/'.$imgName);
            $imageName = "uploaded_imgs/career/".$imgName; 
        }
        DB::table('core_values')->insert([ 
            "title"          =>$req->title, 
            "content"        =>$req->content,
            "img"            =>$imageName,
            "created_at"     => Carbon::now(),
        ]); 
 
        return redirect()->back();
 
    }

    // Core value Update
    public function editCoreValueData(Request $req){ 
 
        $imageName; 
        $getData    = DB::table('core_values')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "career_".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/career/'.$imgName);
            $imageName = "uploaded_imgs/career/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 
        DB::table('core_values')->where([
            ['id', $req->id],
        ])->update([
            "title"         =>$req->title,
            "content"       =>$req->content, 
            "img"           =>$imageName, 
            "updated_at"    => Carbon::now(),
        ]);  
        return redirect()->back();
 
 
    }

    // Career Delete
    public function CoreValueDelete($id){ 
        $check = DB::table('core_values')->where('id', $id)->first();
        if ($check) {  
            DB::table('core_values')->where('id', $id)->delete();
            if ($check->img) {
                unlink($check->img);
            }
        }
        return redirect()->back();
    }
 

}
