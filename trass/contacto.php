<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
		  <link rel="stylesheet" type="text/css" href="iconos/css/all.css">
</head>
<body class="bg-dark">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark  sticky-top">
		  <a class="navbar-brand" href="#" style="font-family:courier ;"><img style="width: 10%" src="img/curvas.png"> TrassDigital</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        	<a class="nav-link" href="index.html">Inicio</a>
		      </li>   
		    </ul>
		     <!-- Dropdown -->
		    <ul class="navbar-nav">
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	        Desplegable
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Contacto</a>
				        <a class="dropdown-item" href="#">Nosotros</a>
				        <a class="dropdown-item" href="#">Ubicacion</a>
				      </div>
				    </li>
			  </ul>
  </div>  
</nav>
	<div class="jumbotron text-center">
		<h1>Trass</h1>
		<p>Tecnologia Recaudacion y Aplicaciones</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 border border-danger" style="background-color:blue">
				<h1>Hemos recibido tus datos </h1>
				<p>Resumen de datos facilitados</p>
	<?php 

		$nombre    = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$correo     = $_POST['correo'];
		
		
		echo "<h1>Muchas gracias ".$nombre." ".$apellidos." 
		 , en breve nos pondremos en contacto con usted en este correo  ".$correo." </h1><br>";
		
		  $td ='luis.cec@gmail.com';
		  $td1 ='trassdigital@gmail.com' ;
		 mail($td1." ".$correo, "formulario", $nombre." ".$apellidos." ha rellenado el formulario y ha dejado este 
		 correo ".$correo );

	
		

	 ?>
			</div>
			<div class="col-sm-6">
				<h1 class="text-center text-danger">Dónde Estamos</h1>
					<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1540.8096926489043!2d-0.4125329754393654!3d39.432730498289025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ef7e872d4d9%3A0x72ed9ac97d70e6d6!2sCalle%20Malta%2C%204%2C%2046200%20Paiporta%2C%20Valencia!5e0!3m2!1ses!2ses!4v1619803965187!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
	<footer class="jumbotron text-center">
		<h1>Trass</h1>
		<p>@ todos los derechos reservados</p>
	</footer>

</body>
</html>