<!DOCTYPE html>
<html>
<head>
	<title>Event creation</title>
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


<style type="text/css">

  h1{
    color: orange;
    text-align: center;
    padding: 20px;
  }
</style>

</div>

</head>
<body>
  <h1>Create_Event Successful!</h1>
</body>
</html>