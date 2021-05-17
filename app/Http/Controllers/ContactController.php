<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function db_store1(request $request){
		
		//validate
	    $request->validate([
          'name' => 'required',        
          'email' => 'required|email',
		  'Asunto'=> 'required',
		  'question'=> 'required',
        ]); 


	 $name=$request->input('name');
 	 $email=$request->input('email');
 	 $relation=$request->input('Asunto');
 	 $query=$request->input('question');

 	 $flag=DB::insert('insert into contacts(Name,Email,Relation,Query) values(?,?,?,?)',[$name,$email,$relation,$query]);


 	 // $mail=mail($email,"Thank you for contacting us","Query Recieved we will process it shortly");
 	 // var_dump($mail);

 	 if($flag){
 	 	return redirect('/query_submit');	
 	 }
 	}
}

?>