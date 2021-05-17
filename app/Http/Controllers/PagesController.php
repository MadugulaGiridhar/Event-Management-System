<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Default(){
    	return view ('Pages.Default');
    }

    public function Admin_user_page(){
    	return view ('Pages.Admin_user_page');
    }

    public function bad_login(){
    	return view ('Pages.bad_login');
    }

	public function Contacto(){
    	return view ('Pages.Contacto');
    }

    public function Create_Event(){
    	return view ('Pages.Create_Event');
    }

    public function Equipos(){
    	return view ('Pages.Equipos');
    }

    public function event_details(){
    	return view ('Pages.event_details');
    }

    public function Inicio(){
    	return view ('Pages.Inicio');
    }

    public function Normal_User_Page(){
    	return view ('Pages.Normal_User_Page');
    }

    public function Nosotros(){
    	return view ('Pages.Nosotros');
    }

    public function query_submit(){
    	return view ('Pages.query_submit');
    }

    public function Register_Event(){
    	return view ('Pages.Register_Event');
    }

    public function register_successful(){
    	return view ('Pages.register_successful');
    }

    public function signup(){
    	return view ('Pages.signup');
    }

    public function View_Profile(){
    	return view ('Pages.View_Profile');
    }

    public function Create_event_successful(){
        return view ('Pages.Create_event_successful');
    }

    public function Register_event_successful(){
        return view ('Pages.Register_event_successful');
    }

}
