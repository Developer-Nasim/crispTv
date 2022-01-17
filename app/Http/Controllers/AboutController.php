<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class AboutController extends Controller{
     
    // go to home view
    public function AboutIndex(){
        $getDatas = DB::table('abouts')->get()->first();
        return view('backend.about', compact('getDatas'));
    }
    
    // go to home view
    public function VisionIndex(){
        $getVisionDatas = DB::table('mission_visions')->where('type',"vision")->get()->first();
        return view('backend.vision', compact('getVisionDatas'));
    }

    // go to home view
    public function MissionIndex(){
        $getMissionDatas = DB::table('mission_visions')->where('type',"mission")->get()->first();
        return view('backend.mission', compact('getMissionDatas'));
    } 

    // About Save or update data
    public function AboutSubmitData(Request $req){ 

        $imageName;
         
        $check = DB::table('abouts')->get()->first();
        if ($check) {
            if ($req->img) { 
                $imgName = "img_".time().uniqid().".".$req->img->getClientOriginalExtension();
                Image::make($req->img)->save('uploaded_imgs/about/'.$imgName);
                $imageName = "uploaded_imgs/about/".$imgName;
                unlink($check->img);
            }else {
                $imageName = $check->img;
            }
            DB::table('abouts')->update([
                "title"        =>$req->title,
                "content"      =>$req->content,
                "img"          =>$imageName,
                "updated_at"   => Carbon::now(),
            ]);
        }else{
            if ($req->img) { 
                $imgName = "img_".time().uniqid().".".$req->img->getClientOriginalExtension();
                Image::make($req->img)->save('uploaded_imgs/about/'.$imgName);
                $imageName = "uploaded_imgs/about/".$imgName;
            }else {
                $imageName = $check->img;
            }
            DB::table('abouts')->insert([
                "title"        =>$req->title,
                "content"      =>$req->content,
                "img"          =>$imageName,
                "created_at"   => Carbon::now(),
            ]);
        }
 
        return redirect()->back();
 
    }

    // Mission/Vision Save or update data
    public function MissionVisionSubmitData(Request $req){ 
  
        if ($req->type == "mission") { 
            $getMissionDatas    = DB::table('mission_visions')->where('type',"mission")->get()->first();
            if ($getMissionDatas) { 
                DB::table('mission_visions')->where('type',"mission")->update([
                    "content"      =>$req->content,
                    "updated_at"   => Carbon::now(),
                ]);
            }else{
                DB::table('mission_visions')->insert([
                    "content"       =>$req->content,
                    "type"          =>$req->type, 
                    "created_at"    => Carbon::now(),
                ]);
            }
        }else{ 
            $getVisionDatas     = DB::table('mission_visions')->where('type',"vision")->get()->first();
            if ($getVisionDatas) { 
                DB::table('mission_visions')->where('type',"vision")->update([
                    "content"      =>$req->content,
                    "updated_at"   => Carbon::now(),
                ]);
            }else{
                DB::table('mission_visions')->insert([
                    "content"       =>$req->content,
                    "type"          =>$req->type, 
                    "created_at"    => Carbon::now(),
                ]);
            }
            
        }
 
        return redirect()->back();
 
    }




}
