<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class WhatWeDoController extends Controller{
 
    
    // What we do view
    public function WhatWeDoIndex(){
        $getDatas = DB::table('what_we_dos')->get()->first();
        return view('backend.what-we-do', compact('getDatas'));
    }

    // Services view
    public function ServicesIndex(){
        $getDatas = DB::table('services')->get()->all();
        return view('backend.services', compact('getDatas'));
    }

    // MoreInfo view
    public function MoreInfoIndex(){
        $getDatas = DB::table('more_infos')->get()->first();
        return view('backend.moreinfo', compact('getDatas'));
    }

    // Services Edit view
    public function ServicesEditIndex($id){
        $getDatas = DB::table('services')->where('id',$id)->get()->first();
        return view('backend.edit-services', compact('getDatas'));
    }

    // What we do Save or update data
    public function whatwedoData(Request $req){ 

        $main_image;
        $other_image;
         
        $check = DB::table('what_we_dos')->get()->first();
        if ($check) {
            if ($req->main_img) { 
                $imgName = "what_we_do_".time().uniqid().".".$req->main_img->getClientOriginalExtension();
                Image::make($req->main_img)->save('uploaded_imgs/what-we-do/'.$imgName);
                $main_image = "uploaded_imgs/what-we-do/".$imgName;
                unlink($check->main_img);
            }else {
                $main_image = $check->main_img;
            }
            if ($req->another_img) { 
                $imgName = "what_we_do_".time().uniqid().".".$req->another_img->getClientOriginalExtension();
                Image::make($req->another_img)->save('uploaded_imgs/what-we-do/'.$imgName);
                $other_image = "uploaded_imgs/what-we-do/".$imgName;
                unlink($check->another_img);
            }else {
                $other_image = $check->another_img;
            } 
            DB::table('what_we_dos')->update([
                "title"        =>$req->title,
                "content"      =>$req->content,
                "main_img"     =>$main_image,
                "another_img"  =>$other_image,
                "updated_at"   => Carbon::now(),
            ]);
        }else{
            if ($req->main_img) { 
                $imgName = "what_we_do_".time().uniqid().".".$req->main_img->getClientOriginalExtension();
                Image::make($req->main_img)->save('uploaded_imgs/what-we-do/'.$imgName);
                $main_image = "uploaded_imgs/what-we-do/".$imgName; 
            } 
            if ($req->another_img) { 
                $imgName = "what_we_do_".time().uniqid().".".$req->another_img->getClientOriginalExtension();
                Image::make($req->another_img)->save('uploaded_imgs/what-we-do/'.$imgName);
                $other_image = "uploaded_imgs/what-we-do/".$imgName; 
            } 
            DB::table('what_we_dos')->insert([
                "title"        =>$req->title,
                "content"      =>$req->content,
                "main_img"     =>$main_image,
                "another_img"  =>$other_image,
                "created_at"   => Carbon::now(),
            ]);
        }
 
        return redirect()->back();
 
    }

    // Services Save
    public function servicesdata(Request $req){ 

        $icon_image;  
        if ($req->icon) { 
            $imgName = "services_".time().uniqid().".".$req->icon->getClientOriginalExtension();
            Image::make($req->icon)->save('uploaded_imgs/services/'.$imgName);
            $icon_image = "uploaded_imgs/services/".$imgName; 
        }
        DB::table('services')->insert([
            "title"         =>$req->title,
            "content"       =>$req->content,
            "img"           =>$icon_image, 
            "created_at"    => Carbon::now(),
        ]);
        return redirect()->back();
 
    }

    // update data Services
    public function editServicesData(Request $req){ 
 
        $imageName; 
        $getData    = DB::table('services')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "services_".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/services/'.$imgName);
            $imageName = "uploaded_imgs/services/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 

        DB::table('services')->where([
            ['id', $req->id],
        ])->update([
            "title"          =>$req->title,
            "content"        =>$req->content,
            "img"            =>$imageName,
            "updated_at"     => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // MoreInfo Save and update
    public function moreSubmitData(Request $req){ 
 
         
        $check = DB::table('more_infos')->get()->first();
        if ($check) { 
            DB::table('more_infos')->update([
                "feedbacks"     =>$req->feedback,
                "projects"      =>$req->projects,
                "we_are_since"  =>$req->we_are_since,
                "updated_at"    => Carbon::now(),
            ]);
        }else{ 
            DB::table('more_infos')->insert([
                "feedbacks"     =>$req->feedback,
                "projects"      =>$req->projects,
                "we_are_since"  =>$req->we_are_since,
                "created_at"    => Carbon::now(),
            ]);
        }
 
        return redirect()->back();
 
    }

    // Services Delete 
    public function serviceDelete($id){
        $check = DB::table('services')->where('id',$id)->get()->first();
        if ($check) {
            DB::table('services')->where('id',$id)->delete();
            if ($check) {
                unlink($check->img);
            }
        }
        return redirect()->back();
    }


}
