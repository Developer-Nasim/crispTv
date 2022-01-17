<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class TestimonialController extends Controller{
     
    
    // go to home view
    public function index(){
        $getDatas = DB::table('testimonials')->get()->all();
        return view('backend.testimonial', compact('getDatas'));
    }
    
    // go to Edit view
    public function editIndex($id){
        $getDatas = DB::table('testimonials')->where('id', $id)->get()->first();
        return view('backend.edit-testimonial', compact('getDatas'));
    }

    // Save
    public function SubmitData(Request $req){ 
 
        $imageName;
           
        if ($req->img) { 
            $imgName = "testimonal".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/testimonal/'.$imgName);
            $imageName = "uploaded_imgs/testimonal/".$imgName;
        } 
        DB::table('testimonials')->insert([
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
        $getData    = DB::table('testimonials')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "testimonal".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/testimonal/'.$imgName);
            $imageName = "uploaded_imgs/testimonal/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 

        DB::table('testimonials')->where([
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
        $check = DB::table('testimonials')->where('id', $id)->first();
        if ($check) { 
            unlink($check->img);
            DB::table('testimonials')->where('id', $id)->delete();
        }
        return redirect()->back();
    }

}
