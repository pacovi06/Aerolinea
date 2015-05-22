<?php

	class conexion1{
		
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "aerolinea";
			
			$conectar = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la BD");
			mysql_select_db($db, $conectar) or die ("No se Encontro la BD");
			$query = "select * from vuelos_disponibles";
			$resultado = mysql_query($query);
			
			
			
				return $resultado;
				
			}
			
		}
		
		
		
	


?>