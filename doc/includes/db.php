<?php
function Connection(){
    /*Datos conexion*/
    $host = "172.16.10.7:3307";
  //  $user = 'NAS_DB';
    $pass = "h!NQ#8akFMIc";
    $bd = 'WhoopIT'; /*Nombre BD*/
   //$host = "localhost:3307";
    $user = 'sfc_db';
   //$bd = 'traceabilitypoo';
    $con = new mysqli($host, $user, $pass); /*Estableciendo conexion*/
    mysqli_select_db($con, $bd); /*Seleccionando BD*/
    return $con;
}
?>

