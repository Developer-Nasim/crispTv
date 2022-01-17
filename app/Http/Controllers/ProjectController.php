<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class ProjectController extends Controller{
     
    
    // Back-end view
    public function index(){
        $getDatas = DB::table('projects')->get()->all();
        return view('backend.project', compact('getDatas'));
    }
    
    // go to Edit view
    public function editIndex($id){
        $getDatas = DB::table('projects')->where('id', $id)->get()->first();
        return view('backend.edit-project', compact('getDatas'));
    }

    // Save
    public function SubmitProjectData(Request $req){ 
 
        $imageName;
           
        if ($req->img) { 
            $imgName = "project".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/project/'.$imgName);
            $imageName = "uploaded_imgs/project/".$imgName;
        } 
        DB::table('projects')->insert([
            "title"          =>$req->title,
            "img"            =>$imageName,
            "content"        =>$req->content,
            "created_at"     => Carbon::now(),
        ]); 
 
        return redirect()->back();
 
    }

    // update data
    public function SubmitEditData(Request $req){ 
 
        $imageName; 
        $getData    = DB::table('projects')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "project".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/project/'.$imgName);
            $imageName = "uploaded_imgs/project/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 

        DB::table('projects')->where([
            ['id', $req->id],
        ])->update([
            "title"          =>$req->title,
            "img"            =>$imageName,
            "content"        =>$req->content,
            "updated_at"     => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // Delete Brands
    public function Delete($id){ 
        $check = DB::table('projects')->where('id', $id)->first();
        if ($check) { 
            unlink($check->img);
            DB::table('projects')->where('id', $id)->delete();
        }
        return redirect()->back();
    }
}
