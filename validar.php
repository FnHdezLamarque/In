<style>
  .error{
    text-align: center;
    margin-top: -100;
    color: white;
  }
</style>
<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("127.0.0.1:3306", "root", "", "whoopit");

$consulta="SELECT*FROM users where user='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:material.php");

}else{
    ?>
    <?php
    include("index.php");
    
    ?>
      <h1 class="error">ERROR DE AUTENTIFICACION, VERIFIQUE SUS CREDENCIALES</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);