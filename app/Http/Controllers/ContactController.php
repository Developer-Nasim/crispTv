<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use Carbon\Carbon;
use DB;

class ContactController extends Controller
{ 

    public function Subscribedindex(){ 
        $getDatas = DB::table('subscribeds')->get()->all();
        return view('backend.subscribed', compact('getDatas'));
    }
 
    public function SubscribedDelete($id){ 
        $check = DB::table('subscribeds')->where('id',$id)->exists();
        if ($check) {
            DB::table('subscribeds')->where('id',$id)->delete();
        }
        return back();
    }
 

    public function ContactRequests(){
        $getDatas = DB::table('contact_requests')->get()->all();
        return view('backend.contact_request', compact('getDatas'));
    }

    public function ContactReqDelete($id){ 
        $check = DB::table('contact_requests')->where('id',$id)->exists();
        if ($check) {
            DB::table('contact_requests')->where('id',$id)->delete();
        }
        return back();
    }

    public function ContactReqView($id){
        $data = [];
        $check = DB::table('contact_requests')->where('id',$id)->exists();
        if ($check) {
            $data = DB::table('contact_requests')->where('id',$id)->get()->first();
        }
        return view('backend.contact_request_view',compact('data'));
    }



}
