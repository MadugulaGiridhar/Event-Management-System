<!DOCTYPE html>
<html>
<head>
	<title>Admin User Page</title>
	<link rel="stylesheet" href="{{ URL::asset('css/ciudad.CSS') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="{{ URL::asset('javascript/project4.js') }}"></script>	
<div id="wrapper">
<img src="{{ asset('/Images/Logotipo.png') }}" alt="logo"  id="logo" />   
<div class="topnav" id="myTopnav">
  <a href="{{ url('/Inicio') }}">Inicio</a>
  <a href="{{ url('/Nosotros') }}">Nosotros</a>
  <a href="{{ url('/Equipos') }}">Equipos</a>
  <a href="http://gxm0833.uta.cloud/wordpress_blog">Blog</a>
  <a href="{{ url('/Contacto') }}">Contacto</a>
  <a href="{{ url('/') }}">Inicio de Sesion</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
</head>

<body >
<div id="wrapper">
<div class="admindivision">
	<img src="{{ asset('/Images/Background-website-01.jpg') }}" id="image1" />    					
	<div class="admincentered"><strong>Welcome</strong></div>
	<div class="admincentered1"><strong>Administrator</strong></div>			
	</div>	

<br><br>

<h1 class="adminh1">Greetings! This page is visible only to the employees with admin rights.</h1>

<ul class="adminunorder">
	<li class="adminList"><a href="{{ url('/View_Profile') }}" class="adminref">View Profile</a></li>
	<li class="adminList"><a href="{{ url('/Create_Event') }}" class="adminref">Add a new Event</a></li>
	<li class="adminList"><a href="#" class="adminref">View User list</a></li>
	<li class="adminList"><a href="#" class="adminref">Create New Blog</a></li>
	<li class="adminList"><a href="{{ url('/event_details') }}" class="adminref">View Events</a></li>
	<li class="adminList"><a href="{{ url('/') }}" class="adminref">Logout</a></li>		
</ul>
<div class="Aliados">
<br/>
	<h1 id="center">Nuestros Aliados <span class="color2">Estrategicos</span></h1>	
	<img src="{{ asset('/Images/image3.jpg') }}" class="bottomimage5" />    					
	<img src="{{ asset('/Images/i.jpg') }}" class="bottomimage6" />    					
	
</div>
<div class="footer">
<div class="footer1">	
	<ul class="icons">
		<li class="topBar1"><a href="#" class="fa fa-envelope"></a></li>
		<li class="topBar1"><a href="#" class="fa fa-twitter"></a></li>
		<li class="topBar1"><a href="#" class="fa fa-instagram"></a></li>
	</ul>		
</div>	
</div>

<div class="footerTag">	
	<div class="apps">DiazApps <span class="span">&copy 2020 All Right Reserved</span> </div>
	<div class="arrow"> ^</div>
</div>
</div>
</div>

</body>
</html>