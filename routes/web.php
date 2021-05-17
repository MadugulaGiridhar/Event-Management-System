<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','PagesController@Default');

Route::get('/Admin_user_page','PagesController@Admin_user_page');

Route::get('/bad_login','PagesController@bad_login');

Route::get('/Contacto','PagesController@Contacto');

Route::get('/Create_Event','PagesController@Create_Event');

Route::get('/Equipos','PagesController@Equipos');

Route::get('/event_details','PagesController@event_details');

Route::get('/Inicio','PagesController@Inicio');

Route::get('/Normal_User_Page','PagesController@Normal_User_Page');

Route::get('/Nosotros','PagesController@Nosotros');

Route::get('/query_submit','PagesController@query_submit');

Route::get('/Register_Event','PagesController@Register_Event');

Route::get('/register_successful','PagesController@register_successful');

Route::get('/signup','PagesController@signup');

Route::get('/View_Profile','PagesController@View_Profile');

Route::match(['get', 'post'],'/db_store','UsersController@db_store');

Route::match(['get', 'post'],'/login','UsersController@login');

Route::match(['get', 'post'],'/db_store1','ContactController@db_store1');

Route::match(['get', 'post'],'/create_Event','EventController@create_Event');

Route::match(['get', 'post'],'/register_Event','EventController@register_Event');

Route::match(['get', 'post'],'/Create_event_successful','PagesController@Create_event_successful');

Route::match(['get', 'post'],'/Register_event_successful','PagesController@Register_event_successful');