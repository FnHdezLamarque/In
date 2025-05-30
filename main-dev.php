<?php
	require 'conexion.php';
	$sentencia = "SELECT id_material, equipo, marca, modelo, serie, area FROM material";
	$material = $mysqli->query($sentencia);
	
	$query = "SELECT * FROM usuarios;";
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
					document.getElementById("op8").style.background='white';

				}
        </script>

		<!-- Tabla empleados -->
		<div class="container">
			<div class="row">
				<h1 style=color:#3282b8>Device Maintenance IT</h1>
			</div>


        <div class="row">
			<?php
				$query = "SELECT
				M.id_material,
				equipo,
				marca,
				modelo,
				nombre_pc,
				serie,
				area,
				ubicacion,
				Date,
				Next_Date,
				state,
				usuario,
				DATEDIFF(Next_Date, CURDATE()) AS dias
			FROM
				WhoopIT.SAVE_MAINTENANCE AS SM
				LEFT JOIN WhoopIT.usuarios AS U ON SM.Id_usuario = U.id_users
				RIGHT JOIN WhoopIT.material AS M ON SM.Id_material = M.Id_material
			WHERE
				equipo IN ('Device')
			AND (state IS NULL OR state = 0)
			AND (Date IS NULL OR Date > DATE_SUB(CURDATE(), INTERVAL 6 MONTH))
			GROUP BY serie
			ORDER BY dias ASC;";
			?>
				<div>
					<table class="table table-dark table-striped">
						<thead>
							<tr style="text-align: center;">
								<th>Equipo</th>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Nombre</th>
								<th>Serie</th>
								<th>Area</th>
								<th>Ubication</th>
								<th>Date</th>
                                <th>Term Expiration</th>
								<th>Next Maintenance</th>
								<th>Made Maintenance</th>
							</tr>
						</thead>
							
						<tbody>
						<?php
							$Result2 = mysqli_query($conex,$query);
							while ($Row = $Result2 -> fetch_assoc()) { ?>
							<tr style="text-align: center;">
							<td><?php echo $Row['equipo'] ?></td>
								<td><?php echo $Row['marca'] ?></td>
								<td><?php echo $Row['modelo'] ?></td>
								<td><?php echo $Row['nombre_pc'] ?></td>
								<td><?php echo $Row['serie'] ?></td>
								<td><?php echo $Row['area'] ?></td>
								<td><?php echo $Row['ubicacion'] ?></td>
								<td><?php echo $Row['Date'] ?></td>
								<td><?php echo $Row['dias']?></td>
								<td><?php echo $Row['Next_Date'] ?></td>
								<td><a href="auxdev_lap.php?id_material=<?php echo $Row['id_material']; ?>"class="btn btn-outline-light">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
											<path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
											<path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
										</svg>
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

				</div>  
			</div>

		</div>
	</div>
	

</body>
</html>