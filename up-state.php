<?
require 'conexion.php';

if(isset($_POST['state'])){
	$valor = $_POST['state'];
}
$sentencia = "UPDATE SAVE_MAINTENANCE SET state=1 WHERE id_material=$id_material ";
	$material = $mysqli->query($sentencia);
	//echo $sentencia
	if($material>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='vistamaterial.php' class='btn btn-primary' >Regresar</a>";
?>