<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Image; 

class BlogController extends Controller{
      
    // Blog Back-end index
    public function index(){
        $getDatas = DB::table('blogs')->get()->all();
        return view('backend.blog', compact('getDatas'));
    }
    
    // go to Edit view
    public function editIndex($id){
        $getDatas = DB::table('blogs')->where('id', $id)->get()->first();
        return view('backend.edit-blog', compact('getDatas'));
    }

    // Save
    public function SubmitBlogsData(Request $req){ 
 
        $imageName;
           
        if ($req->img) { 
            $imgName = "blog".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/blog/'.$imgName);
            $imageName = "uploaded_imgs/blog/".$imgName;
        }
        DB::table('blogs')->insert([
            "title"         =>$req->title,
            "content"       =>$req->content, 
            "img"           =>$imageName, 
            "created_at"    => Carbon::now(),
        ]); 
 
        return redirect()->back();
 
    }

    // update data
    public function SubmitEditData(Request $req){ 
 
        $imageName; 
        $getData    = DB::table('blogs')->where('id', $req->id)->get()->first();
        if ($req->img) { 
            $imgName = "blog".time().uniqid().".".$req->img->getClientOriginalExtension();
            Image::make($req->img)->save('uploaded_imgs/blog/'.$imgName);
            $imageName = "uploaded_imgs/blog/".$imgName;
            unlink($getData->img);
        }else{
            $imageName  = $getData->img;
        } 
        DB::table('blogs')->where([
            ['id', $req->id],
        ])->update([
            "title"         =>$req->title,
            "content"       =>$req->content, 
            "img"           =>$imageName, 
            "updated_at"    => Carbon::now(),
        ]);  
        return redirect()->back();
 
    }

    // Delete Brands
    public function DeleteBlog($id){ 
        $check = DB::table('blogs')->where('id', $id)->first();
        if ($check) { 
            if ($check->img) {
                unlink($check->img);
            }
            DB::table('blogs')->where('id', $id)->delete();
        }
        return redirect()->back();
    }

 
}
