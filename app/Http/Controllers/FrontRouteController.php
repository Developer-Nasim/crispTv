<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use DB;
use Carbon\Carbon;
use Image; 

class FrontRouteController extends Controller{
    
 
    // Blog Front-end index
    public function blogFrontIndex(){
        return view('frontend.blog');
    }
    
    // Blog Front-end index
    public function blogFrontSingle($id,$title){
        $getBlog = DB::table('blogs')->where('id',$id)->get()->first();
        return view('singlepages.single-blog', compact('getBlog'));
    }
 
    
    // Tutorial Details
    public function tutorialDetails($id){
        $getData    = DB::table('tutorials')->where('id', $id)->get()->first();  
        return response()->json($getData);
    }
 
    // Jobs Front view
    public function JobFrontIndex(){
        return view('frontend.jobs');
    }
    // Jobs front single
    public function JobFrontSingleIndex($id,$title){
        $getDatas = DB::table('careers')->where('id',$id)->get()->first();
        return view('singlepages.single-job', compact('getDatas'));
    }

    // Contact page
    public function Contactindex(){ 
        return view('frontend.contact');
    }
 
    // Project view
    public function ProjectfrontIndex(){ 
        return view('frontend.projects');
    }

    // Project single view
    public function ProjectfrontSingleIndex($id,$title){ 
        $getDatas = DB::table('projects')->where('id', $id)->get()->first();
        return view('singlepages.single-project', compact('getDatas'));
    }

    // Contact data
    public function contactData(Request $req){ 
        $msg = "";
        $insert = DB::table('contact_requests')->insert([
            'name'      => $req->name,
            'email'     => $req->email,
            'number'    => $req->number,
            'services'  => $req->services,
            'message'   => $req->message,
            'created_at'=> Carbon::now(),
        ]);
        if ($insert) {
            $msg = "success";
        }else{
            $msg = "failed";
        }
        $data = array(
            'name'  => $req->name,
            'email' => $req->email,
            'number' => $req->number,
            'services' => $req->services,
            'message' => $req->message,
        );
        $sendMail = Mail::to('crisptv@crisptv.media')->send(new MyTestMail($data));
        // Mail::send(new MyTestMail($data));
        return back()->with('message', $msg);
    }

    // Subscribe
    public function Subscribed(Request $req){
        $check = DB::table('subscribeds')->where('email', $req->email)->exists();
        if (!$check) {
            DB::table('subscribeds')->insert(['email' => $req->email,'created_at' => Carbon::now()]);
        } 
        return back();
    }














}
