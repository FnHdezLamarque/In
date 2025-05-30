<?php
	
	require 'conexion.php';
	$sentencia = "SELECT id_material, equipo, marca, modelo, serie, area FROM material";
	$material = $mysqli->query($sentencia);
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.6.0.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Whoop</title>
		
		<script>
			$(document).ready(function() {
			$('#tablematerial').DataTable();
			} );
			
		</script>
		
		<style>
			body {
			background: white;
			}
		</style>
		
	</head>
	 
	<body>
		<!-- navbar -->
        <?php include 'navbar.php'; ?>
		<script 
			type="text/javascript">
				window.onload=function(){
					document.getElementById("op6").style.background='white';

				}
        </script>

		<!-- Tabla empleados -->
		<div class="container">
			<div class="row">
				<h1 style=color:#3282b8>Inventory IT</h1>
			</div>
		</div>

	
			
		<div>
       <?php

        $query = "SELECT * FROM WhoopIT.material where substr(area, 1, 8)='Assembly'
		order by id_material asc;";

        ?>
        <div>
            <table id="tablematerial" class="display" style="width:100%">
                <thead>
					<tr>
						<th>Equipo</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Nombre</th>
						<th>Serie</th>
						<th>Area</th>
						<th></th>
						<th></th>

					</tr>
                </thead>
                    
                <tbody>
                <?php
                    $Result2 = mysqli_query($conex,$query);
                    while ($Row = $Result2 -> fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $Row['equipo'] ?></td>
                        <td><?php echo $Row['marca'] ?></td>
						<td><?php echo $Row['modelo'] ?></td>
                        <td><?php echo $Row['nombre_pc'] ?></td>
						<td><?php echo $Row['serie'] ?></td>
                        <td><?php echo $Row['area'] ?></td>
						<td><a href="asignacion.php?id_material=<?php echo $Row['id_material']; ?>" class="btn btn-outline-info" >Details</a> </td>
						<td><a href="editmaterial.php?id_material=<?php echo $Row['id_material']; ?>" class="btn btn-outline-warning" >Edit</a> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>                      

    </div>

</body>
</html>