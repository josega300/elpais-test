<?php
	
include 'base.php';
include 'patient.php';

$nombre = $_POST['patient_filter'];//recibe el nombre a buscar
$objPaciente = new patient();
$consulta=$objPaciente->get_pacientes_ajax($nombre);

if($consulta){
foreach ($consulta as $rs) {
	echo '<li onclick="set_item('.$rs['id_producto'].','.$rs['nombre']).')>'.$nombre.'</li>';
}else{
echo '<li>'."No hay resultados".'</li>';
}
?>