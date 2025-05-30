<?php
require ("conexion.php");
$query = "SELECT  id_employee, nombre FROM employee;";
$resul = $mysqli->query($query);

$asset = "SELECT asset FROM WhoopIT.material ORDER BY asset DESC LIMIT 1;";
$result = mysqli_query($conex, $asset);
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
                    <h3 style=color:#3282b8>Add material</h3>
                    <form id="material" name="material" method="POST" action="guarda2.php" autocomplete="off">
                        <div class="form-group">
                            <label for="equipo">Equipment</label>
                            <select id="equipo" class="form-control" name="equipo" require>
                                <option value = "PC">PC</option>
                                <option value = "Laptop">Laptop</option>
                                <option value = "Mouse">Mouse</option>
                                <option value = "Keyboard">Keyboard</option>
                                <option value = "Print">Printer</option>
                                <option value = "Scanner">Scanner</option>
                                <option value = "Display">Display</option>
                                <option value = "Device">Device</option>
                                <option value = "Other">Other</option>
                            </select>
                        </div>

                            </br>

                        <div class="form-group">
                            <label for="marca">Brand</label>
                            <input type="text" class="form-control" id=" marca" name="marca" required>
                        </div>
                        
                            </br>

                        <div class="form-group">
                            <label for="modelo">Model</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" required>
                        </div>

                            </br> 

                        <div class="form-group">
                            <label for="serie">Serial Number</label>
                            <input type="text" class="form-control" id="serie" name="serie" >
                        </div>

                        </br>
                        
                        <div class="form-group">
                            <label for="serie">Name</label>
                            <input type="text" class="form-control" id="nombre_pc" name="nombre_pc" required>
                        </div>

                        </br>

                        <div class="form-group">
                            <label for="area">Area</label>
                            <select id="area" class="form-control" name="area">
                                <option value = "Stock">Stock</option>
                                <option value = "Site">Site</option>
                                <option value = "Assembly">Assembly</option>
                                <option value = "SMT">SMT</option>
                                <option value = "Werehouse">Warehouse</option>
                                <option value = "Mezzanine">Mezzanine</option>
                                <option value = "IQC">IQC</option>
                                <option value = "Aisle">Aisle</option>
                                <option value = "Administrative">Administrative</option>
                                <option value = "Recharge">Recharge</option>
                                <option value = "Packing">Packing</option>
                                <option value = "TQI">TQI</option>
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
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>

                            </br>
                            
                            
                        <!--<div class="form-group">
                            <label for="asset">Asset</label>
                            <input type="text" class="form-control" id="asset" name="asset" required>
                        </div>-->

                            </br>
                            
                        <div class="form-group">
                            <label for="ubicacion">Ubication</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                        </div>

                            </br>
                            
                        <div class="form-group">
                            <label for="nota">Note</label>
                            <input type="text" class="form-control" id="nota" name="nota">
                        </div>

                            </br>

                        <div class="form-group">
                            <button class="btn btn-outline-primary" id="guarda2" name="guarda2" type="submit">Save</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
		</div>
		
	</body>
</html>	
