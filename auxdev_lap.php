<?php
    require 'conexion.php';
    $query = "SELECT serie FROM WhoopIT.material;";
    $resul = $mysqli->query($query);

    $consulta = "SELECT * FROM WhoopIT.usuarios;";
    $resul2 = $mysqli->query($consulta);

	
    $id = ($_GET['id_material']);
	
	$sentencia = "SELECT * FROM material WHERE id_material=$id LIMIT 1";
	$material = $mysqli->query($sentencia);
	
	$fila = $material->fetch_assoc();
	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		
		<title>Whoop</title>
	</head>
	<body>
        <!-- navbar dinamico -->
        <?php include 'navbar.php'; ?>
        <script 
            type="text/javascript">
                window.onload=function(){
                    document.getElementById("op4").style.background='white';

                }
        </script>

		<div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 style=color:#3282b8>Add Maintenance</h3>
                    <form id="material" name="material" method="POST" action="up-dev_lap.php" autocomplete="off">
                        <div class="form-group">
                            <input type="text" value="<?=@$id?>" name="Id_material" hidden>
                        </div>

                            <br>

                        <div>Tecnico: 
                        <select id="Id_usuario" name="Id_usuario">
                        <?php while ($row = $resul2->fetch_assoc()){?>
                            <option value=<?=@ $row ['id_users']?>> <?=@ $row['usuario'];?></option>
                        <?php } ?>
                        </select>
                        </div>

                            </br>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="Aspirado">Aspirado Interno <br>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="Archivos">Archivos <br>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="Actualizaciones">Actualizaciones <br>
                        </div>

                            <br>

                        <div class="form-group">
                            <button class="btn btn-outline-primary" name="enviar" type="submit">Save</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
		</div>
		
	</body>
</html>	