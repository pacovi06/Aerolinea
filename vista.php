<html>	
		
	<head>
		<title>VUELOS DISPONIBLES </title>
		<script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
	</head>
	
	<body>
		<div>
			<fieldset> 
				<legend>VUELOS DISPONIBLES DE LA AEROLINEA AEROEXPRESS</legend>
				
				
					
  

					<?php
						include ("conexion1.php");
						$con = new conexion1();
						$aux = $con->recuperarDatos();
						echo "<table class='table'>";  
						echo "<tr>";    
						echo "<th>Identificador</th>";  
						echo "<th>Origen</th>"; 
						echo "<th>Destino</th>"; 
						echo "<th>FechaSalida</th>"; 
						echo "<th>FechaLlegada</th>"; 
						echo "<th>HoraIda</th>"; 
						echo "<th>HoraLlegada</th>"; 
						echo "<th>Estado</th>"; 
						echo "</tr>"; 
						
						while ($row = mysql_fetch_row($aux)){   
							echo "<tr>";    
							echo "<td>$row[1]</td>";  
							echo "<td>$row[2]</td>";  
							echo "<td>$row[3]</td>";
							echo "<td>$row[4]</td>";
							echo "<td>$row[5]</td>";
							echo "<td>$row[6]</td>";
							echo "<td>$row[7]</td>";
							echo "<td>$row[8]</td>";
							echo "</tr>";  
						}  
						echo "</table>";  

					
					?>
				
		</div>
	
	




	</body>

</html>