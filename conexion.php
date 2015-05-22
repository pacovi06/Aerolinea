<?php
	$conexion;
	
	
	if (!($conexion = mysql_connect('localhost', 'root')))
	{
		
		echo "error";
		exit();
		
	}
	
	else{
		
		$conexion = mysql_connect("localhost", "root");
		mysql_select_db("aerolinea", $conexion);
		
		//$query = "select estado from vuelos_disponibles where  Referancia = 2";
	
		$query = "INSERT INTO tabla_usuario VALUES ('3333', 'cari', '3444', '55555', 'banco', 'adul')";
		$dato = "INSERT INTO tabla_usuario VALUES ('3334', 'caris', '3445', '55556', 'bancos', 'adul3')";
        $result = mysql_query($dato);
        echo "¡Gracias! Hemos recibido sus datos.\n";
		
		
		
		//$result = mysql_result(mysql_query($query, $conexion), 0);
		
		//echo $result;
		mysql_close($conexion);
	}
	
	
	
?>