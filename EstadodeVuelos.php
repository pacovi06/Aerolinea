<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aerolines Presidente</title>
    
    <script src="js/jquery.js"></script>
	<script src="js/npm.js"></script>
    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	
</head>
	
<BODY BACKGROUND="simple-azul.jpg" BGPROPERTIES="fixed">
	<div class="container">
			<div class="row">
				<div class="col-xs-6 .col-md-4"> </div>
					<div class="col-xs-12 .col-sm-6 .col-md-8">
						<br>
						<img src="imagenes/banner.jpg" class="img-rounded" WIDTH=1130><br><br>
						  <h1> <span class="glyphicon glyphicon-plane"></span> <font color="#000080">Estado de vuelos</font> </h1> 
					
						<div class="panel-body">
							<p align=justify><font color="#000000"> ¿Viajas o tienes que ir a buscar a alguien al aeropuerto? Revisa los horarios actualizados de salida y llegada de los vuelos AeroExpress.</p><br>
					    </div>
						<div class="col-md-3">
						
						</div>
						<div class="col-sm-8 col-md-4 col-md-offset-1">
								<div class="col-md-8">
									<form role="form">
										<div class="form-group" "col-xs-2">
											<label for="ejemplo_vuelo_1">Numero de vuelo</label>
											<br>
											<input type="text" class="form-control" id="ejemplo_vuelo_1"
												   placeholder="Ejemplo AR236">
										</div>
									</form>
								</div>
								<br>
								
								<div class="col-md-8">
										
										<label>Fecha de vuelo</label>
										
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
									<br>
									
						</div>	
						
						<div class="col-md-4">
						<br>
						
						</div>
									<div class="col-md-6 .col-md-offset-3">
										<br>
										<button type="button" class="btn btn-primary btn-lg btn-block">Ver estado del vuelo</button>
									</div>
						
					</div>
			</div>
    </div>
</BODY>
</html>