<!DOCTYPE html>
<html>
<head>
    <title>Create_Event</title>
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


<body>

<div id="wrapper">
	<br><br>
	<form action="{{URL::to('/create_Event')}}" >
	 @csrf
    <h1 class="Eventh1">CREATE EVENT</h1>
    <div class="Eventdiv">
    <p class="eventParagraph">Please fill in this form to create a event.</p>
    <!-- <hr> -->

     @if(count($errors)>0)

      <ul>
        @foreach($errors->all() as $error)

        <li class="alert alert-danger">{{$error}}</li>

        @endforeach

      </ul>

    @endif
        
    <label for="EventID"><b class="eventLabel">Event ID No</b></label class="eventLabel">
    <br>
	<input type="text" placeholder="Enter Event ID" name="EventID" class="eventInput" required>
    <br>
	<label for="Eventname"><b class="eventLabel">Event Name</b></label class="eventLabel">
    <br>
    <input type="text" placeholder="Enter Event Name" name="Eventname" class="eventInput" required>
    <br>
    <label for="location"><b class="eventLabel">Location</b></label class="eventLabel">
    <br>
    <input type="text" placeholder="Enter Location" name="location" class="eventInput" required>
    <br>
    <label for="date"><b class="eventLabel">Date</b></label class="eventLabel">
    <br>
    <input type="Date" placeholder="Enter Date" name="date" class="eventInput" required>
    <br><br>    
	<input type="submit"  name="submit"  value="CREATE" class="eventRegister">
    </div>


	</form>
<br><br><br>
<div class="division1"><br>
<img src="{{ asset('/Images/homepage-one-banner.jpg') }}"  id="image2" />   
<label class="centered3">CONTACT  <label class="label1">US</label></label>
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