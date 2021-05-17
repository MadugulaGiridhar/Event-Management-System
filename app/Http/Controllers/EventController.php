<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
     public function create_Event(request $request){
	//validate
	    $request->validate([
          'EventID' => 'required',
		  'Eventname' => 'required',
		  'location'=> 'required',
		  'date'=> 'required',
        ]); 


	 $eventid=$request->input('EventID');
	 $eventname=$request->input('Eventname');
	 $location=$request->input('location');
 	 $date=$request->input('date');	 

 	 

 	 $flag=DB::insert('insert into create_events(id,EventName,Location,Date) values(?,?,?,?)',[$eventid,$eventname,$location,$date]);

 	 if($flag){
 	 	return redirect('/Create_event_successful');	
 	 }
}

 public function register_Event(request $request){
	//validate
	    $request->validate([
          'YourName' => 'required',
		  'Eventname' => 'required',
          'email'=> 'required',
		  'location'=> 'required',
        ]); 


	 $username=$request->input('YourName');
	 $eventname=$request->input('Eventname');
	 $location=$request->input('location');
 	 $email=$request->input('email');	 

 	 $flag=DB::insert('insert into register_events(UserName,EventName,Location,Email) values(?,?,?,?)',[$username,$eventname,$location,$email]);

 	 if($flag){
 	 	return redirect('/Register_event_successful');	
 	 }
}


}
