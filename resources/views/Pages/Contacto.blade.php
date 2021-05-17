<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
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
  <a href="#">Contacto</a>
  <a href="{{ url('/') }}">Inicio de Sesion</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
</head>
<body>

	<div id="wrapper">

	<div class="division">
	<img src="{{ asset('/Images/homepage-one-banner.jpg') }}"  id="image1" />   
	<div class="centered">CONTACT US</div>
	<div class="centered1">HOME &gt CONTACT US</div>			
	</div>	

<div class="entry1">

<h1>NUESTRAS <i class="italic">REDES</i></h1>
<h1><i class="italic"><u>SO</u>CIALES</i></h1>
<table class="contactoTable">
	<tr>
		<td class="contactoIcons"><a href="#" class="fa fa-instagram"></a></br><span id="center">@genteyciudadorg</span></td>
		<td class="contactoIcons"><a href="#" class="fa fa-twitter"></a></br>@genteyciudadorg</td>
	</tr>
	<tr>
		<td class="contactoIcons"><a href="#" class="fa fa-phone"></a></br>001 346 714 3892 </br>058 414 8225881</br>056 933948007</td>
		<td class="contactoIcons"><a href="#" class="fa fa-envelope"></a></br>info@genteyciudad.org</td>
	</tr>
</table>


</div>


<div class="entry">
	<form action="{{URL::to('/db_store1')}}"  onsubmit="return contactValidation();">
	<h1><strong>FORMULARIO DE </strong></h1>
	<h1 class="color"><u>CO</u>NTACTO</h1>

	@if(count($errors)>0)

	<ul>
		@foreach($errors->all() as $error)

		<li class="alert alert-danger">{{$error}}</li>

		@endforeach

	</ul>

	@endif


	<label for="Tu_Nombre">Name (requerido)</label> <br />
	<input type="text" name="name" placeholder="Tu Nombre" id="Tu_Nombre" required />
	<br/>		
	<br/>		



	<label for="Tu_Correo">Email (requerido)</label> <br />
	<input type="Email" name="email" placeholder="Tu Correo" id="Tu_Correo" required/>
	<br/>		
	<br/>		
	

	
	<label for="Asunto">Asunto</label> <br />
	<input type="text" name="Asunto" placeholder="Asunto" id="input" required />
	<br/>		
	<br/>		
	

	
	<label for="question">Query</label> <br />
	<textarea rows = "10" cols = "51" name = "question" id="input1" placeholder="Enter the Query" required></textarea>
	<br/>		
	<br/>		
	

	<input type="submit" value="ENVIAR" id="button"><br/><br/>
	</form>
</div>
<br/><br/><br/><br/><br/><br/>

<div class="division2">
	<img src="{{ asset('/Images/homepage-one-banner.jpg') }}" height="200" width="100%" />   
	<div class="bottom">Escríbenos, te invitamos a brindar lo mejor de ti para el bien común, <span class="color2">queremos conocer acerca de tus ideas para mejorar.</span></div>	
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
</body>
</html>