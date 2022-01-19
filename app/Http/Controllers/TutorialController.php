<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

 
class TutorialController extends Controller{
     
    
    // go to home view
    public function index(){
        $getDatas = DB::table('tutorials')->get()->all();
        return view('backend.tutorial', compact('getDatas'));
    }
    
    // go to Edit view
    public function editIndex($id){
        $getDatas = DB::table('tutorials')->where('id', $id)->get()->first();
        return view('backend.edit-tutorial', compact('getDatas'));
    }

    // Save
    public function SubmitTutorialData(Request $req){ 
 
        $imageName = "";
           
        $getData    = DB::table('tutorials')->get()->all();
        if (count($getData) < 5) { 
            if ($req->img) { 
                $imgName = "tutorial".time().uniqid().".".$req->img->getClientOriginalExtension();
                Image::make($req->img)->save('uploaded_imgs/tutorial/'.$imgName);
                $imageName = "uploaded_imgs/tutorial/".$imgName;
            } 
            DB::table('tutorials')->insert([
                "title"          =>$req->title,
                "sub_title"      =>$req->sub_title,
                "img"            =>$imageName,
                "content"        =>$req->content,
                "created_at"     => Carbon::now(),
            ]);  
        }
        return redirect()->back();
 
    }

    // update data
    public function SubmitEditData(Request $req){ 
 
        $imageName; 
        $getData    = DB::table('tutorials')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "tutorial".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/tutorial/'.$imgName);
            $imageName = "uploaded_imgs/tutorial/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 

        DB::table('tutorials')->where([
            ['id', $req->id],
        ])->update([
            "title"          =>$req->title,
            "sub_title"      =>$req->sub_title,
            "img"            =>$imageName,
            "content"        =>$req->content,
            "updated_at"     => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // Delete Brands
    public function Delete($id){ 
        $check = DB::table('tutorials')->where('id', $id)->first();
        if ($check) { 
            unlink($check->img);
            DB::table('tutorials')->where('id', $id)->delete();
        }
        return redirect()->back();
    }
 
}
