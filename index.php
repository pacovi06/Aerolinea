<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aerolines Presidente</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>
	
    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	
	<title>AeroExpress</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
   
	
	<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
	<body>
	
		<nav  class = "navbar navbar-default" role="navigation"> 
			<div  class= "container-fluid" > 
				<div  class= "navbar-header page-scroll" "col-xs-12 .col-sm-6 .col-md-8"> 
					<a  class= "navbar-brand"> 
						<img style="max-width:200px; margin-top: -7px;"
						src="imagenes/logotipo1.png" width="400px"/> 
					</a> 
				</div> 
			</div> 
		</nav>
		
		<div class="col-md-1-1-1-1">
							<ul class="nav nav-tabs nav-justified">
								<li role="presentation" class="active"><a href="#">Inicio</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Servicios <b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											  <li><a href="Itinerario.php">Consulta itinerarios</a></li>
											  <li><a href="EstadodeVuelos.php">Consulta vuelos</a></li>
											<li><a href="#">Promociones</a></li>
										</ul>
									</li>
							
								<li role="presentation"><a href="perfil.php">Información Corporativa</a></li>
							</ul>
		</div>
		
		<header>
			<div class="container"  style="overflow: hidden; position: relative; width: 1380px; height: 752.016666666667px;">
				<div class="row">
					
			
						<div id="myCarousel" class="carousel slide" data-ride="carousel" style="position: relative; left: 0px; width: 1400px; height: 652.016666666680px;">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								   <div class="carousel-inner" role="listbox">
										<div class="item active">
										  <img src="imagenes/197.jpg" alt="Chania" width="100%">
										</div>

										<div class="item">
										  <img src="imagenes/204.jpg" alt="Chania">
										</div>

										<div class="item">
										  <img src="imagenes/bogota.jpg" alt="Flower">
										</div>
										
																				
									</div>

								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
								  
								  
								  
								  
								
								
						</div>	
					
				</div>
			</div>
        </header>
	
	
	<div class="col-md-6">
				<form  role ="form"  method="post" action="buscarVuelo.php" method="post" enctype="application/x-www-form-urlencoded">
					
						<br>
						
							<div class="col-sm-6">
								<br>
							
								<div class="radio" name="Opciones" id="Ida y Vuelta">
									<label><input type="radio" name="optradio" checked> Ida y Vuelta </label>
								 
								</div>
							</div>
							<br>
							<div class="col-sm-6">
							
								<div class="radio" name="Opciones1" id="Solo Ida">	
										<label><input type="radio" name="optradio">Solo ida</label>
										
										<br>
								</div>
							</div>
						<br>
						
						<div class="col-md-6">
							<br>
							<label>Origen</label>
								<br>
								<select name="Origen">
									<option>Bogota</option>
									<option>Cali</option>
									<option>Medellin</option>
								</select>
							
						</div>
						<div class="col-md-6">
								<br>
							<label>Destino</label>
								<br>
								<select name="Destino">
									<option>Bogota</option>
									<option>Cali</option>
									<option>Medellin</option>
								</select>
						</div>
						<br>
						<br>
						<br>
							<div class='col-sm-6'>
								<br>
								<label>Fecha Ida</label>
								<br>
								<input name='ida' type='date' />
							</div>
							
						
						
							<div class='col-sm-6'>
								<br>
								<label>Fecha Regreso</label>
								<input type='date'/>
							</div>	
							
						<br>
					<div>
						<div class="col-md-6">
						<br>
								<label>Personas que viajan </label>
								<br>
								
								<select name="Adultos que Viajan">
									<option> 1 adulto</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
						</div>
					
						<div class="col-md-6">
								<br>
								<br>
								<br>
								
								<select name="niños que Viajan">
									<option>Ningun niño</option>
									<option>1 niño</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
						</div>
							<br>
							
						<div class="col-md-8">
							
								<select name="clase">
									<option>Clase Economica</option>
								</select>
							<br>
						</div>
						
						<div  class="col-xs-5 .col-md-4">
						
						</div>
						<br>
							<br>
						<div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3">
							<br>
							<button type="submit" name="Buscar" class="btn btn-default btn-lg active" value="envia-POST">Buscar Vuelos</button>
						</div>	
					</div>

				
				
						</div>
						
							<div class="col-xs-12 .col-sm-6 .col-md-8">
							<br><br>
							<br>
							
							
						
							
							
						</div>
		
		
			
					
					</div>
				</form>	
		<!--</div> --->
	
	
							<?php
								if (isset($_POST['Buscar'])) {
									require ("SeleccionarVuelos.php");
								}
							?>
	</body>
</html>
