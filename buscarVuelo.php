<?php
	
	/*
	$Origen = $_POST['Origen'];
	echo $Origen;
	$Destino = $_POST['Destino'];
	echo $Destino; 
	$FechaIda = $_POST['ida'];
	echo $FechaIda; 
	
	$FechaRegreso = $_POST['FechaRegreso'];
	echo $FechaRegreso;
	
	$Adultos = $_POST['adultos'];
	echo $Adultos;
	
	$Ninos = $_POST['niños'];
	echo $Ninos;
	*/
	
	include ("conexion1.php");
	$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "aerolinea";
	
	$con = mysql_connect($host,$user,$pw)
	or die ("Problemas al conectar server");
	
	mysql_select_db($db, $con)
	or die("problemas al conectar db");
	
	$registro = mysql_query("SELECT * FROM vuelos_disponibles WHERE Origen='$_POST[Origen]'AND Destino ='$_POST[Destino]'")
	
	or die ("problemas en consulta:".mysql_error());
	
	while($reg = mysql_fetch_array($registro)){
		
		echo $reg['Origen']."<br>";
		echo $reg['Destino']."<br>";
		echo $reg['FechaSalida']."<br>";
	}
	
	
	
?>