<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion</title>
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
  <a href="#">Inicio de Sesion</a>  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
</head>

<body>	
	<div id="wrapper">			
	<div class="background1">
<div class="box1">
  <div class="box2">
    <div class="close1">
      <span class="close" onclick="closeBox()">x</span>
    </div>
    <h2 id="center">Inicio de <span class="color2">Sesion</span></h2>
    <hr>
   <div class="container1">
  <form action="{{URL::to('/login')}}" method="GET" onsubmit="return loginpage1();">
    @if(count($errors)>0)

      <ul>
        @foreach($errors->all() as $error)

        <li class="alert alert-danger">{{$error}}</li>

        @endforeach

      </ul>

    @endif
    <label for="usrname"><strong>Enter Email</strong></label>
    <input type="Email" id="usrname"  placeholder="Email" name="usr" required>

    <label for="psw"><strong>Enter Password</strong></label>
    <input type="password" id="psw" name="psw"  placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     <hr>
    <button id='signupbutton'onclick="location.href='{{ url('/signup') }}'">SIGN UP</button>
    <input type="submit" value="LOGIN" id="login">
  </form>
</div> 
	
  </div>
</div>

<script type="text/javascript">
	closeBox = function() {
  document.querySelector(".box1").classList.add("closed");
}
</script>
</div>
</div>
</div>
</body>
</html>
