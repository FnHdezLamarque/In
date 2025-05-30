<?php
function Connection(){
      /*Datos conexion*/
    $host = "127.0.0.1:3306";
  //  $user = 'NAS_DB';
    $pass = "";
    $bd = 'whoopit'; /*Nombre BD*/
   //$host = "localhost:3307";
    $user = "root" ;
   //$bd = 'traceabilitypoo';
    $con = new mysqli($host, $user, $pass); /*Estableciendo conexion*/
    mysqli_select_db($con, $bd); /*Seleccionando BD*/
    return $con;
}
?>

