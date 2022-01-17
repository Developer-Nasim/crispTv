<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class OtherMediaController extends Controller
{
 
    
    // go to view
    public function index(){
        $getDatas = DB::table('other_media')->orderBy('position', 'DESC')->get()->all();
        return view('backend.otherMedia',compact('getDatas'));
    }

    // Career Edit view
    public function editIndex($id){
        $getDatas = DB::table('other_media')->where('id', $id)->first();
        return view('backend.edit-other_media', compact('getDatas'));
    }

    // Save
    public function SubmitOtherMedia(Request $req){ 
        
        $imageName; 
        if ($req->position == "about-tribe") {
            if ($req->img) { 
                $imgName = "other_media_".time().uniqid().".".$req->img->getClientOriginalExtension();
                Image::make($req->img)->save('uploaded_imgs/other_media/'.$imgName);
                $imageName = "uploaded_imgs/other_media/".$imgName;
            }
            $check    = DB::table('other_media')->where('position', "about-tribe")->get()->all();
            if (5 > count($check)) {  
                DB::table('other_media')->insert([
                    "position"      =>$req->position,
                    "img"           =>$imageName,
                    "created_at"    => Carbon::now(),
                ]); 
            }
        }elseif ($req->position == "avaters-tribe") {
            if ($req->img) { 
                $imgName = "other_media_".time().uniqid().".".$req->img->getClientOriginalExtension();
                Image::make($req->img)->save('uploaded_imgs/other_media/'.$imgName);
                $imageName = "uploaded_imgs/other_media/".$imgName;
            }
            $check    = DB::table('other_media')->where('position', "avaters-tribe")->get()->all();
            if (7 > count($check)) { 
                DB::table('other_media')->insert([
                    "position"      =>$req->position,
                    "img"           =>$imageName,
                    "created_at"    => Carbon::now(),
                ]); 
            }
        }elseif ($req->position == "career-tribe") { 
            if ($req->img) { 
                $imgName = "other_media_".time().uniqid().".".$req->img->getClientOriginalExtension();
                Image::make($req->img)->save('uploaded_imgs/other_media/'.$imgName);
                $imageName = "uploaded_imgs/other_media/".$imgName;
            }
            $check    = DB::table('other_media')->where('position', "career-tribe")->get()->all();
            if (5 > count($check)) {  
                DB::table('other_media')->insert([
                    "position"      =>$req->position,
                    "img"           =>$imageName,
                    "created_at"    => Carbon::now(),
                ]); 
            }
        }else{
            $check    = DB::table('other_media')->where('position', $req->position)->get()->first();
            if ($check) { 
                if ($check->img) {
                    unlink($check->img);
                }
                if ($req->img) { 
                    $imgName = "other_media_".time().uniqid().".".$req->img->getClientOriginalExtension();
                    Image::make($req->img)->save('uploaded_imgs/other_media/'.$imgName);
                    $imageName = "uploaded_imgs/other_media/".$imgName;
                }
                DB::table('other_media')->where('position', $req->position)->update([
                    "position"      =>$req->position,
                    "img"           =>$imageName,
                    "updated_at"    => Carbon::now(),
                ]);
            }else{  
                if ($req->img) { 
                    $imgName = "other_media_".time().uniqid().".".$req->img->getClientOriginalExtension();
                    Image::make($req->img)->save('uploaded_imgs/other_media/'.$imgName);
                    $imageName = "uploaded_imgs/other_media/".$imgName;
                }
                DB::table('other_media')->insert([
                    "position"      =>$req->position,
                    "img"           =>$imageName,
                    "created_at"    => Carbon::now(),
                ]); 
            }
        }
 
        return redirect()->back();
 
    }
     
    // update data
    public function SubmitEditData(Request $req){ 
 
        $imageName; 
        $getData    = DB::table('other_media')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "other_media_".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/other_media/'.$imgName);
            $imageName = "uploaded_imgs/other_media/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 
        DB::table('other_media')->where([
            ['id', $req->id],
        ])->update([ 
            "position"      =>$req->position,
            "img"           =>$imageName,
            "updated_at"    => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // Delete Brands
    public function Delete($id){ 
        $check = DB::table('other_media')->where('id', $id)->first();
        if ($check) { 
            if ($check->img) {
                unlink($check->img);
            }
            DB::table('other_media')->where('id', $id)->delete();
        }
        return redirect()->back();
    }
}
