<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class TeamReviewController extends Controller
{ 
    
    // go to home view
    public function index(){
        $getDatas = DB::table('team_reviews')->get()->all();
        return view('backend.teamreview', compact('getDatas'));
    }
    
    // go to Edit view
    public function editIndex($id){
        $getDatas = DB::table('team_reviews')->where('id', $id)->get()->first();
        return view('backend.edit-teamreview', compact('getDatas'));
    }

    // Save
    public function SubmitData(Request $req){ 
 
        $imageName;
           
        if ($req->img) { 
            $imgName = "teamreview".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/teamreview/'.$imgName);
            $imageName = "uploaded_imgs/teamreview/".$imgName;
        } 
        DB::table('team_reviews')->insert([
            "name"           =>$req->name,
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
        $getData    = DB::table('team_reviews')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "teamreview".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/teamreview/'.$imgName);
            $imageName = "uploaded_imgs/teamreview/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 

        DB::table('team_reviews')->where([
            ['id', $req->id],
        ])->update([
            "name"           =>$req->name,
            "title"          =>$req->title,
            "img"            =>$imageName,
            "content"        =>$req->content,
            "updated_at"     => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // Delete Brands
    public function Delete($id){ 
        $check = DB::table('team_reviews')->where('id', $id)->first();
        if ($check) { 
            unlink($check->img);
            DB::table('team_reviews')->where('id', $id)->delete();
        }
        return redirect()->back();
    }

}
