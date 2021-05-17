<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    
	public function db_store(request $request){


	 $request->validate([
          'user' => 'required',        
          'email' => 'required|email|unique:users,email',
		  'psw'=> 'required',
		  'psw-repeat'=> 'required',
		  'phone'=> 'required',
		  'addr'=> 'required',
        ]); 	

	 $user=$request->input('user');
 	 $psw=$request->input('psw');
 	 $email=$request->input('email');
 	 $phone=$request->input('phone');
 	 $addr=$request->input('addr');

 	 $flag=DB::insert('insert into users(UserName,Password,UserType,Email,PhoneNo,address) values(?,?,?,?,?,?)',[$user,$psw,'normal',$email,$phone,$addr]);


 	 // $mail=mail($email,"Registration successful!","Thank you for registering with us.");
 	 // var_dump($mail);

 	 if($flag){
 	 	return redirect('/register_successful');	
 	 }
 	}
  
public function login(request $request){


	$request->validate([
          'usr' => 'required',        
          'psw' => 'required',		  
        ]); 	


	 $email=$request->input('usr');
	 $psw=$request->input('psw'); 	 

 	
 	 $data = DB::table('users')->where('Email', $email)->first();

 	 $data1 = DB::table('users')->where('Email', $email)->value('Email');

 	 $userType = DB::table('users')->where('Email', $email)->value('UserType');

 	 $pwd = DB::table('users')->where('Email', $email)->value('Password');


 	 	if($data1==$email AND $psw==$pwd)
 	 	{
 	 	
 	 	if($userType=='normal'){
 	 	echo" welcome normal user ";
 	 return redirect('/Normal_User_Page');
 	 	}
 	 	
 	 	else{
 	 		echo("welcome Admin User");
 	 		return redirect('/Admin_user_page');

 	 	}
 	
 	 }

 	 else{
 	 	return redirect('/bad_login');	
 	 }




}
}
