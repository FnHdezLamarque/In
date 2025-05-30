<?php
	
	require 'conexion.php';
	
	$id = ($_GET['id_material']);
	
	$sentencia = "SELECT equipo, marca, modelo, serie, nombre_pc, area, id_employee, fecha, asset, ubicacion, nota  FROM material WHERE id_material=$id LIMIT 1";
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
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.6.0.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		
		<title>Whoop</title>
	</head>
	<body>
        
		<div class="container">
            <div class="row">
            <div class="col-md-8">
            <h3>Details</h3>
            <form id="registro" name="registro" method="POST" action="test.php" autocomplete="off">
                <div class="form-group">
                    <div class="form-group">
                        <label for="id_employee">Ubication</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?php echo $fila['ubicacion']; ?>" >
                    </div>
                    
                        </br>
                        
                    <div class="form-group">
                        <label for="id_employee">Note</label>
                        <input type="text" class="form-control" id="nota" name="nota" value="<?php echo $fila['nota']; ?>" >
                    </div>
                        </br>

                    <div class="form-group">
                        <button class="btn btn-outline-primary" id="guarda2" name="guarda2" type="submit">Save</button>
                    </div>
                </div>
			</form>
			</div>
			</div>
		</div>
	</body>
</html>				