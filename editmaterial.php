<?php
	
	require 'conexion.php';
	
	$id = ($_GET['id_material']);
	
	$sentencia = "SELECT equipo, marca, modelo, serie, nombre_pc, area, id_employee, fecha, asset, ubicacion, nota  FROM material WHERE id_material=$id LIMIT 1";
	$material = $mysqli->query($sentencia);
	
	$fila = $material->fetch_assoc();
	
	$query = "SELECT  id_employee, nombre FROM employee;";
    $resul = $mysqli->query($query);
	
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
            <h3>Edit material</h3>
            <form id="registro" name="registro" method="POST" action="editmaterial2.php" autocomplete="off">
                <div class="form-group">
                    <label for="equipo">Equipment</label>
                    <select id="equipo" class="form-control" name="equipo">
                        <option value = "PC" <?php if('PC' == $fila['equipo']) { echo 'selected'; } ?>>PC</option>
                        <option value = "Laptop" <?php if('Laptop' == $fila['equipo']) { echo 'selected'; } ?>>Laptop</option>
                        <option value = "Mouse" <?php if('Mouse' == $fila['equipo']) { echo 'selected'; } ?>>Mouse</option>
                        <option value = "Keyboard" <?php if('Keyboard' == $fila['equipo']) { echo 'selected'; } ?>>Keyboard</option>
                        <option value = "Printer" <?php if('Printer' == $fila['equipo']) { echo 'selected'; } ?>>Print</option>
                        <option value = "Scanner" <?php if('Scanner' == $fila['equipo']) { echo 'selected'; } ?>>Scanner</option>
                        <option value = "Display" <?php if('Display' == $fila['equipo']) { echo 'selected'; } ?>>Display</option>
                        <option value = "Device" <?php if('Device' == $fila['equipo']) { echo 'selected'; } ?>>Device</option>
                        <option value = "Other" <?php if('Other' == $fila['equipo']) { echo 'selected'; } ?>>Other</option>
                    </select>
                    <input type="text" value="<?=@$id?>" name="nombre_id" hidden>
                </div>
                </div>

                    </br>

                <div class="form-group">
                    <label for="marca">Brand</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $fila['marca']; ?>" required>
                </div>
                
                    </br>

                <div class="form-group">
                    <label for="modelo">Model</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $fila['modelo']; ?>" required>
                </div>

                    </br> 

                <div class="form-group">
                    <label for="serie">Serial Number</label>
                    <input type="text" class="form-control" id="serie" name="serie" value="<?php echo $fila['serie']; ?>" required>
                </div>

                    </br>
                    
                <div class="form-group">
                    <label for="serie">Name</label>
                    <input type="text" class="form-control" id="nombre_pc" name="nombre_pc" value="<?php echo $fila['nombre_pc']; ?>">
                </div>

                    </br>
                    
                <div class="form-group">
                    <label for="area">Area</label>
                    <select id="area" class="form-control" name="area">
                        <option value = "Stock" <?php if('Stock' == $fila['area']) { echo 'selected'; } ?>>Stock</option>
                        <option value = "Site" <?php if('Site' == $fila['area']) { echo 'selected'; } ?>>Site</option>
                        <option value = "Assembly" <?php if('Assembly' == $fila['area']) { echo 'selected'; } ?>>Assembly</option>
                        <option value = "SMT" <?php if('SMT' == $fila['area']) { echo 'selected'; } ?>>SMT</option>
                        <option value = "Werehouse" <?php if('Werehouse' == $fila['area']) { echo 'selected'; } ?>>Werehouse</option>
                        <option value = "Mezzanine" <?php if('Mezzanine' == $fila['area']) { echo 'selected'; } ?>>Mezzanine</option>
                        <option value = "IQC" <?php if('IQC' == $fila['area']) { echo 'selected'; } ?>>IQC</option>
                        <option value = "Aisle" <?php if('Aisle' == $fila['area']) { echo 'selected'; } ?>>Aisle</option>
                        <option value = "Packing" <?php if('Packing' == $fila['area']) { echo 'selected'; } ?>>Packing</option>
                        <option value = "Recharge" <?php if('Recharge' == $fila['area']) { echo 'selected'; } ?>>Recharge</option>
                        <option value = "Administrative" <?php if('Administrative' == $fila['area']) { echo 'selected'; } ?>>Administrative</option>
                        <option value = "TQI" <?php if('TQI' == $fila['area']) { echo 'selected'; } ?>>TQI</option>
                    </select>
                </div>
                
                    </br>

                <div>Assignment: 
                    <select id="id_employee" name="id_employee">
                    <?php while ($row = $resul->fetch_assoc()){?>
                        <option value=<?=@ $row ['id_employee']?>> <?=@ $row['nombre'];?></option>
                    <?php } ?>
                    </select>
                </div>

                    </br>

                <div class="form-group">
                    <label for="fecha">Date</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fila['fecha']; ?>" required>
                </div>

                    </br>
                    
                <div class="form-group">
                    <label for="id_employee">Asset</label>
                    <input type="text" class="form-control" id="asset" name="asset" value="<?php echo $fila['asset']; ?>" required>
                </div>
                
                	</br>

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
                    </br>
				    </form>
				</div>
			</div>
		</div>
	</body>
</html>				