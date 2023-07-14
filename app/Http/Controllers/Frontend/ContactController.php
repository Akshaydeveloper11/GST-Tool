<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

public function store(Request $request){
    $request->validate([
     'name'=>'required|string',
     'email'=>'required|string',
     'subject'=>'required|string',
     'message'=>'required|string'
    ]);
    // dd($request ->all());

   $customer=new ContactUs;
$customer->name=$request['name'];
$customer->email=$request['email'];
$customer->subject=$request['subject'];
$customer->message=$request['message'];
$customer->save();

return redirect('/contact');

}
}
