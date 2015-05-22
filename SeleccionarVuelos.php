<?php

$estado_IdayVuelta = 'sin control';
$estado_SoloIda = 'sin control'; 

/*if (isset ($_POST ['Buscar'])) {
	$Selected_radio = $ _POST ['optradio'];
	
	en index= 	 <?PHP print $estado_IdayVuelta?; ?>
				<?PHP print $estado_SoloIda?; ?>
	*/
	
	if ($selected_radio =='Ida y vuelta') {
		$estado_IdayVuelta = 'comprobado';
} 
	else if ($selected_radio == 'Solo ida') {
		$estado_SoloIda = 'comprobado';
}


$Origen = $_POST['Origen'];
$Destino = $_POST['Destino'];
$FechaIda = $_POST['Fecha Ida'];
$FechaRegreso = $_POST['Fecha Regreso'];
$AdultosqueViajan = $_POST['Adultos que Viajan'];
$niñosqueViajan = $_POST['niños que Viajan'];

?>