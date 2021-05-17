<!DOCTYPE html>
<html>
<head>
	<title>Event_Details</title>
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
	<div class="admincentered"><strong>EVENTS</strong></div>
	<!-- <div class="admincentered1"><strong>Profile</strong></div>			 -->
	</div>	
<br>

	<h1 id="adminh2">Currently Active</h1>		
	<table class="adminTable">
		<tr class="adminRow">
			<td class="adminData">Event 1:</td>
			<td class="adminData">EventName Populated from DB</td>

		</tr>		
		<tr class="adminRow">
			<td class="adminData">Event 2:</td>
			<td class="adminData">EventName Populated from DB</td>
		</tr>
		<tr class="adminRow">
			<td class="adminData">Event 3:</td>	
			<td class="adminData">EventName Populated from DB</td>			
		</tr>
		<tr class="adminRow">
			<td class="adminData">Event 4:</td>
			<td class="adminData">EventName populated from DB</td>
		</tr>
		
	</table>
	<br/>
	<!-- <input type="button" name="details" value="Update Details" class="adminButton"> -->

<br><br><br><br>
	<h1 id="center">Nuestros Aliados <span class="color2">Estrategicos</span></h1>
	<img src="{{ asset('/Images/image3.jpg') }}" class="bottomimage5" />    					
	<img src="{{ asset('/Images/i.jpg') }}" class="bottomimage6" />    					
	

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