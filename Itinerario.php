<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aerolines Presidente</title>
  
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	
	</head>
	
<BODY background="imagenes/simple-azul.jpg">
	<div class="container">
			<nav  class = "navbar navbar-default navbar-static-top" role="navigation" > 
					<div  class= "container-fluid" > 
						<div  class= "navbar-header page-scroll"> 
							<a  class= "navbar-brand" > 
								<img style="max-width:400px; margin-top: -35px;"
								src="imagenes/logotipo.png" width="1050px"/> 
								
							</a> 
						</div> 
						
					</div> 
			</nav>
				<br>
				<div class="col-md-1-1-1-1">
									<ul class="nav nav-tabs nav-justified" >
										<li><a href="index.php">Inicio</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													Servicios <b class="caret"></b>
												</a>
												<ul class="dropdown-menu">
													  <li role="presentation" class="active"><a href="#">Consulta itinerarios</a></li>
													  <li><a href="EstadodeVuelos.php">Consulta vuelos</a></li>
													<li><a href="#">Promociones</a></li>
												</ul>
											</li>
									
										<li role="presentation"><a href="perfil.php">Información Corporativa</a></li>
									</ul>
				</div>
				
					<div class="col-xs-12 .col-sm-6 .col-md-8">
						<br>
						
						  <h1> <span class="glyphicon glyphicon-search"></span> <font color="#000080">Consulta de itinerario​s</font> </h1> 
					 
						
						<div class="panel-body">
							<p align=justify><font color="#000000"> La información está sujeta a cambios operacionales del aeropuerto de origen del vuelo. Preséntate en los horarios establecidos para el chequeo y abordaje.</p><br>
					    </div>
						
					</div>
					<div class="col-md-6">
						<form  role ="form"  method="post" action="buscarVuelo.php" method="post" enctype="application/x-www-form-urlencoded">
							<div class="col-sm-6">
								
								<div class="radio" name="Op-itinerario" id="Ida y Vuelta">
									<label><input type="radio" name="optradio" checked> Ida y Vuelta </label>
								 
								</div>
							</div>
						
							<div class="col-sm-6">
								
								<div class="radio" name="Op-itinerario1" id="Solo Ida">	
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


							<div class='col-sm-6'>
								<br>
								<label>Fecha Ida</label>
								<div class="form-group">
									<div class='input-group date' id='datetimepicker1' name= "Fecha Ida">
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										 </span>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								$(function () {
									$('#datetimepicker1').datetimepicker();
								});
							</script>
							
							<div class='col-sm-6'>
								<br>
								<label>Fecha Regreso</label>
								<div class="form-group">
									<div class='input-group date' id='datetimepicker1' name= "Fecha Regreso">
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>	
							<script type="text/javascript">
								$(function () {
									$('#datetimepicker1').datetimepicker();
								});
							</script>
						<br>
						
						<div  class="col-xs-4 .col-md-4">
						
						</div>
							<br>
							<br>
							
						<div class="col-xs-6">
							<br>
							
							<button type="submit" name="Consultar" class="btn btn-default btn-lg active" value="envia-POST">Consultar</button>
							<br>
						</div>	
					</div>

						</form>
			</div>
	</div>
</BODY>
</html>









