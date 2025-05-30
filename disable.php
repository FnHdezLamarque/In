<?php
	
	require 'conexion.php';
	
	$sentencia = "SELECT 
    id_material,
    equipo,
    marca,
    modelo,
    serie,
    nombre_pc,
    area,
    nombre,
    fecha,
    asset,
    ubicacion,
    nota,
    disable
FROM
    WhoopIT.employee AS e
        INNER JOIN
    WhoopIT.material AS m ON m.id_employee = e.id_employee
WHERE disable = 1;";
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
					document.getElementById("op5").style.background='white';

				}
        </script>

		<!-- Tabla empleados -->
		<div class="container">
			<div class="row">
				<h1 style=color:#3282b8>Disable IT</h1>
			</div>
			<!--Estilo del reporte-->
				<style> 
					.con {
					display: flex;
					justify-content: flex-end;
					}

					.boton {
						display: inline-block;
						padding: 10px 20px;
						background-color: #3282b8;
						color: white;
						text-decoration: none;
						border-radius: 4px;
						border: none;
						cursor: pointer;
					}
				</style>

			<table id="tablematerial" class="display" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Equipment</th>
						<th>Branch</th>
						<th>Model</th>
						<th>Serial Number</th>
						<th>Name</th>
						<th>Area</th>
						<th>Assignment</th>
						<th>Date</th>
						<th>Asset</th>
						<!--<th>Ubication</th>-->
						<!--<th>Note</th>-->
						<th></th>
					</tr>

				</thead>
				<tbody>
						<?php while($fila = $material->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $fila['id_material']; ?></td>
							<td><?php echo $fila['equipo']; ?></td>
							<td><?php echo $fila['marca']; ?></td>
							<td><?php echo $fila['modelo']; ?></td>
							<td><?php echo $fila['serie']; ?></td>
							<td><?php echo $fila['nombre_pc']; ?></td>
							<td><?php echo $fila['area']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['fecha']; ?></td>
							<td>
								<?php
									$longitud = 5; // La longitud total que deseas que tenga el número, incluyendo los ceros

									$numeroConCeros = str_pad($fila['asset'], $longitud, '0', STR_PAD_LEFT);
									//echo $numeroConCeros; // Imprime "00042"
								?>
								<?php echo "WMA". $numeroConCeros ?>
							</td>
							<!--<td><?//php echo $fila['ubicacion']; ?></td>-->
							<!--<td><?//php echo $fila['nota']; ?></td>-->
							<td><a href="elimaterial.php?id_material=<?php echo $fila['id_material']; ?>" class="btn btn-outline-danger">Active</a> </td>
						</tr>
						
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>	