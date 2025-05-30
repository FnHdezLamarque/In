<?php
	
	require 'conexion.php';
	
	$id = ($_GET['id_employee']);
	
	$sql = "SELECT nombre, telefono, correo, depto  FROM employee WHERE id_employee=$id LIMIT 1";
	$resultado = $mysqli->query($sql);
	
	$fila = $resultado->fetch_assoc();
	
	
	
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
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		
		<title>Whoop</title>
	</head>
	<body>
        
		<div class="container">
            <div class="row">
            <div class="col-md-8">
            <h3>Edit employee</h3>
            <form id="registro" name="registro" method="POST" action="editar2.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Name</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombre']; ?>" required>
                    <input type="hidden" id="id_employee" name="id_employee" value="<?php echo $id; ?>"
                    />
                </div>

                    </br>

                <div class="form-group">
                    <label for="telefono">Phone</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $fila['telefono']; ?>" required>
                </div>
                
                    </br>

                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $fila['correo']; ?>" required>
                </div>

                    </br> 

                <div class="form-group">
                    <label for="depto">Department</label>
                    <select id="depto" class="form-control" name="depto">
                        <option value = "ATE" <?php if('ATE' == $fila['depto']) { echo 'selected'; } ?>>ATE</option>
                        <option value = "Engineering" <?php if('Engineering' == $fila['depto']) { echo 'selected'; } ?>>Engineering</option>
                        <option value = "Import/Export" <?php if('Import/Export' == $fila['depto']) { echo 'selected'; } ?>>Import/Export</option>
                        <option value = "IT" <?php if('IT' == $fila['depto']) { echo 'selected'; } ?>>IT</option>
                        <option value = "Mantence" <?php if('Mantence' == $fila['depto']) { echo 'selected'; } ?>>Mantence</option>
                        <option value = "Operation" <?php if('Operation' == $fila['depto']) { echo 'selected'; } ?>>Operation</option>
                        <option value = "Quality" <?php if('Quality' == $fila['depto']) { echo 'selected'; } ?>>Quality</option>
                        <option value = "Werehouse" <?php if('Werehouse' == $fila['depto']) { echo 'selected'; } ?>>Receiving</option>
                        <option value = "RH" <?php if('RH' == $fila['depto']) { echo 'selected'; } ?>>RH</option>
                        <option value = "RMA" <?php if('RMA' == $fila['depto']) { echo 'selected'; } ?>>RMA</option>
                        <option value = "Supply"<?php if('Supply' == $fila['depto']) { echo 'selected'; } ?>>Supply Chain</option>
                        <option value = "Development"<?php if('Development' == $fila['depto']) { echo 'selected'; } ?>>Development</option>
                        <option value = "Production"<?php if('Production' == $fila['depto']) { echo 'selected'; } ?>>Production</option>
                        <option value = "Planning"<?php if('Planning' == $fila['depto']) { echo 'selected'; } ?>>Planning</option>
                        <option value = "Automation"<?php if('Automation' == $fila['depto']) { echo 'selected'; } ?>>Automation</option>
                    </select>
                </div>

                    </br>

                    <div class="form-group">
							<button class="btn btn-outline-primary" id="guarda" name="guarda" type="submit">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>				