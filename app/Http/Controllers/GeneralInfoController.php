<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 


class GeneralInfoController extends Controller{   
 
    
    // go to view
    public function index(){
        $getDatas = DB::table('general_infos')->get()->first();
        return view('backend.general', compact('getDatas'));
    }

    // Save or update data
    public function SubmitGeneralData(Request $req){ 
 
        $imageName;
        $white_logoName;
 
        $check = DB::table('general_infos')->get()->first();
        if ($check) {
            if ($req->logo) {
                if ($check->logo) {
                    unlink($check->logo);
                }
                $imgName = "logo_".time().uniqid().".".$req->logo->getClientOriginalExtension();
                Image::make($req->logo)->save('uploaded_imgs/general/'.$imgName);
                $imageName = "uploaded_imgs/general/".$imgName;
            }else{
                $imageName = $check->logo;
            }
            if ($req->white_logo) {
                if ($check->white_logo) {
                    unlink($check->white_logo);
                }
                $imgName = "white_logo_".time().uniqid().".".$req->white_logo->getClientOriginalExtension();
                Image::make($req->white_logo)->save('uploaded_imgs/general/'.$imgName);
                $white_logoName = "uploaded_imgs/general/".$imgName;
            }else{
                $white_logoName = $check->white_logo;
            }
            DB::table('general_infos')->update([
                "name"          =>$req->business_name,
                "logo"          =>$imageName,
                "white_logo"    =>$white_logoName,
                "address"       =>$req->address,
                "number"        =>$req->number,
                "email"         =>$req->email,
                "fb"            =>$req->facebook,
                "tw"            =>$req->twitter,
                "insta"         =>$req->instagram,
                "ytb"           =>$req->youtube,
                "linkedin"      =>$req->linkedin,
                "mighty"        =>$req->mighty,
                "updated_at"    => Carbon::now(),
            ]);
        }else{
            if ($req->logo) { 
                $imgName = "logo_".time().uniqid().".".$req->logo->getClientOriginalExtension();
                Image::make($req->logo)->save('uploaded_imgs/general/'.$imgName);
                $imageName = "uploaded_imgs/general/".$imgName;
            } 
            if ($req->white_logo) { 
                $imgName = "white_logo_".time().uniqid().".".$req->white_logo->getClientOriginalExtension();
                Image::make($req->white_logo)->save('uploaded_imgs/general/'.$imgName);
                $white_logoName = "uploaded_imgs/general/".$imgName;
            } 
            DB::table('general_infos')->insert([
                "name"          =>$req->business_name,
                "logo"          =>$imageName,
                "white_logo"    =>$white_logoName,
                "address"       =>$req->address,
                "number"        =>$req->number,
                "email"         =>$req->email,
                "fb"            =>$req->facebook,
                "tw"            =>$req->twitter,
                "insta"         =>$req->instagram,
                "ytb"           =>$req->youtube,
                "linkedin"      =>$req->linkedin,
                "mighty"        =>$req->mighty,
                "created_at"    => Carbon::now(),
            ]);
        }
 
        return redirect()->back();
 
    }

    
}
