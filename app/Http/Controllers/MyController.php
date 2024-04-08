<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\MyController;

class MyController extends Controller
{
    public function contact(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $subject=$request->input('subject');
        $mobilenumber=$request->input('mobilenumber');
        $message=$request->input('message');
        DB::insert('insert into contactus (name,email,subject,mobilenumber,message) values (?, ?,?,?,?)', [$name, $email,$subject,$mobilenumber,$message]);   
       global $msg;
        $msg = 'message has been sent';
        return view('contact')->with('msg', $msg);
        
    }
    public function appointment(Request $request)
    {
        $name=$request->input('name');
        $purpose=$request->input('purpose');
        $mobilenumber=$request->input('mobilenumber');
        $department=$request->input('department');
        $date=$request->input('date');
        $time=$request->input('time');
        DB::insert('insert into appointment (name,purpose,mobilenumber,department,date,time) values (?, ?,?,?,?,?)', [$name, $purpose,$mobilenumber,$department,$date,$time]);   
       global $msg;
        $msg = 'appointment has been booked';
        return view('appointment')->with('msg', $msg);
        
    }
}