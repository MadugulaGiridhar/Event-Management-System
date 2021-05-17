<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" href="{{ URL::asset('css/ciudad.CSS') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="{{ URL::asset('javascript/project4.js') }}"></script>	
<div id="wrapper">
<img src="{{ asset('/Images/Logotipo.png') }}" alt="logo"  id="logo" />   
<div class="topnav" id="myTopnav">
  <a href="#">Inicio</a>
  <a href="{{ url('/Nosotros') }}">Nosotros</a>
  <a href="{{ url('/Equipos') }}">Equipos</a>
  <a href="http://gxm0833.uta.cloud/wordpress_blog">Blog</a>
  <a href="{{ url('/Contacto') }}">Contacto</a>
  <a href="{{ url('/') }}">Inicio de Sesion</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
</head>
<body>
	<div id="wrapper">

	<div class="division">	
	<img src="{{ asset('/Images/homepage-one-banner.jpg') }}"  id="image3" />   
	<div class="left"><strong>GENTE</strong></div>
	<div class="left1">Y CIUDAD</div>	
	<div class="text">Buscamos marcar un punto de partida para la transformación de nuestras dificultades y diferencias en cimientos firmes que, desde las ciudades, requieren nuestros países latinoamericanos para convertirse en los mejores lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de vida y asegurar los derechos de las futuras generaciones.</div>	
	</div>	

	<br/><br/><br/><br/><br/><br/>

	<div class="OBJETIVOS">
		<h2 id="center">OBJETIVOS</h2>
		<p>Realizar investigaciones, estudios y propuestas legislativas, relacionados con la gestión de los gobierno locales para el desarrollo sostenible.</p>
		<p>Formular proyectos para promover la participación ciudadana en iniciativas locales para la sostenibilidad.</p>
		<p>Desarrollar programas de capacitación en las áreas de participación ciudadana local y gobierno abierto para la sostenibilidad.</p>
		<p>Implementar campañas de sensibilización para motivar en la audiencia el ejercicio activo de la ciudadanía como eje fundamental para la transformación de las ciudades.</p>
	</div>

<div class="Valores">
<br/>

	<h2 class="h2element"><strong>Nuestros</strong><span class="Valores1"> Valores</span></h2>

	<table class="table">
		<col width="480">
		<col width="480">
		<col width="480">
		<tr>
			<th class="tableHead"><h1><span class="color1">CA</span>LIDAD</h1></th>
			<th class="tableHead"><h1><span class="color1">CO</span>NFIANZA</h1></th>
			<th class="tableHead"><h1><span class="color1">CO</span>HERENCIA</h1></th>
		</tr>
		<tr>
			<td class="tableHead">Es la práctica de los integrantes & Ciudad que fomenta una mejora continua alcanzar la misión de la organización.</td>
			<td class="tableHead">Es la seguridad que Gente & Ciudad genera a través de sus actos.</td>
			<td class="tableHead">Todas las actuaciones de Gente & Ciudad estarán en consonancia con sus valores institucionales.</td>
		</tr>
		<tr>
			<th class="tableHead"><h1><span class="color1">CO</span>MPROMISO</h1></th>
			<th class="tableHead"><h1><span class="color1">CO</span>OPERACIÓN</h1></th>
			<th class="tableHead"><h1><span class="color1">TR</span>ANSPARENCIA</h1></th>
		</tr>
		<tr>
			<td class="tableHead">Los integrantes de Gente & Ciudad asumen como propio el cumplimiento de las obligaciones de la institución.</td>
			<td class="tableHead">En Gente & Ciudad se promueve la suma de fuerzas para lograr objetivos compartidos.</td>
			<td class="tableHead">Es la cualidad que caracteriza y promueve Gente & Ciudad que permite conocer claramente nuestro planteamientos y acciones.
			</td>
		</tr>
	</table>
</div>

<br/><br/><br/>
<table class="table3">
	<tr>
		<td id="center"><a href="#" class="fa fa-microphone"></a><br/><span class="color3">18 FOROS</span></td>
		<td  id="center"><a href="#" class="fa fa-users"></a></br><span class="color3">50 + PASTICIPANTES</td>
	</tr>	
	<tr>
		<td id="center"><a href="#" class="fa fa-book"></a><br/><span class="color3">30 EVENTOS</a></span></td>
		<td  id="center"><a href="#" class="fa fa-calendar"></a></br><span class="color3">3 EVENTOS POR DIAS</span></td>
	</tr>
</table>
<div class="division3">	
	<img src="{{ asset('/Images/homepage-one-banner.jpg') }}"  id="image4" />   
	<div class="centered4">
	<h2 class="left3"><span class="color2">Registrate con </span><span class="color2">Nosotros</span></h2>
	<p class="left3">Para estas informado de nuestas actividades y eventos</p>
	<input type="text" name="Nombre Completo" placeholder="Nombre Completo" class="Nombre">
	<input type="text" name="Correo" placeholder="Correo" class="Nombre">
	<br/>	<br/>
	<input type="text" name="Telefono" placeholder="Telefono" class="Nombre">
	<label for="Nuestros Aliados Estrategicos"></label>
	<select id="Nuestros Aliados Estrategicos" class="Nombre">
  	<option value="volvo">Nuestros Aliados Estrategicos</option>
  	</select>
  	<br/><br/>
  	<input type="button" name="RegistratAhora" value="REGISTRAR AHORA" class="left4">
  </div>	
</div>

<div class="Aliados">
<<br/>
	<h1 id="center">Nuestros Aliados <span class="color2">Estrategicos</span></h1>
	<img src="{{ asset('/Images/image3.jpg') }}"  class="bottomimage5" />   
	<img src="{{ asset('/Images/i.jpg') }}"  class="bottomimage6" />   
	
</div>
<div>
	<h1 id="center">Nuestro<span class="color2">Blog</span></h1>
	<p id="center">Esta sección esta pensada para integrar a los ciudadanos y poder tener un feedback directo con nuestra comunidad.</p>
</div>
<div>
<div class="blog1">		
	<img src="{{ asset('/Images/image1.jpg') }}"  class="blogImage" />    		
	<p class="pargraph1">¿Ciudadanos?</p>		
	<hr>	
	<button class="button3">23<br/>AGO</button>
	<table class="table4">
		<tr>
			<td class="admin"><a href="#" class="fa fa-user"> admin</td>
			<td class="admin"><a href="#" class="fa fa-heart"> 350</td>	
			<td class="admin"><a href="#" class="fa fa-comments"> 30</td>
		</tr>
	</table>
</div>

<div class="blog2">		
	<img src="{{ asset('/Images/image2.png') }}"  class="blogImage" />    				
	<p class="pargraph1">Efecto espejo: Calidad de vida</p>		
	<hr>	
	<button class="button3">23<br/>AGO</button>
	<table class="table4">
		<tr>
			<td class="admin"><a href="#" class="fa fa-user"> admin</td>
			<td class="admin"><a href="#" class="fa fa-heart"> 350</td>	
			<td class="admin"><a href="#" class="fa fa-comments"> 30</td>
		</tr>
	</table>
</div>

<div class="blog3">		
	<img src="{{ asset('/Images/i.jpg') }}"  class="blogImage" />    				
	<p class="pargraph1">Evolución ciudadana (opinión)`</p>		
	<hr>	
	<button class="button3">13<br/>MAY</button>
	<table class="table4">
		<tr>
			<td class="admin"><a href="#" class="fa fa-user"> admin</td>
			<td class="admin"><a href="#" class="fa fa-heart"> 350</td>	
			<td class="admin"><a href="#" class="fa fa-comments"> 30</td>
		</tr>
	</table>
</div>
</div>
<br/><br/><br/>
<br/><br/><br/>
<div class="InicioMargin">
<div class="division1">
<img src="{{ asset('/Images/homepage-one-banner.jpg') }}" id="image2" />    					
<label class="centered3">Contactate con <label class="label1">Nosotros</label></label>
<input type="email" name="email" placeholder="Email" id="email">
<input type="submit" value="ENVIAR" id="submit">

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