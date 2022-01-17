<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class BrandsController extends Controller{
    
 
    // go to view
    public function index(){
        $getDatas = DB::table('brands')->get()->all();
        return view('backend.brands', compact('getDatas'));
    }

    // Save or update data
    public function SubmitBrandsData(Request $req){ 

        $imageName;
           
        if ($req->logo) { 
            $imgName = "logo_".time().uniqid().".".$req->logo->getClientOriginalExtension();
            Image::make($req->logo)->save('uploaded_imgs/brands/'.$imgName);
            $imageName = "uploaded_imgs/brands/".$imgName;
        } 
        DB::table('brands')->insert([
            "logo"          =>$imageName,
            "name"          =>$req->brand_name,
            "link"          =>$req->link, 
            "created_at"    => Carbon::now(),
        ]); 
 
        return redirect()->back();
 
    }

    // Delete Brands
    public function DeleteBrandsData($id){ 
        $check = DB::table('brands')->where('id', $id)->first();
        if ($check) {
            unlink($check->logo);
            DB::table('brands')->where('id', $id)->delete();
        }
        return redirect()->back();
    }

 
}
