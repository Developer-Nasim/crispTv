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

}
