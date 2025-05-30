<?php
	
	require 'conexion.php';
	$sql = "SELECT id, nombre, telefono, correo, depto FROM employee";
	$resultado = $mysqli->query($sql);
	
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
		
		<title>In</title>
		
		<script>
			$(document).ready(function() {
			$('#tableemployee').DataTable();
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
		<script type="text/javascript">
            window.onload=function(){
                document.getElementById("op2").style.background='white';

            }
        </script>

		<!-- Tabla empleados -->
		<div class="container">
			<div class="row">
				<h1 style=color:#3282b8>Inventory In</h1>
			</div>
			
			<table id="tableemployee" class="display" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Department</th>
						<th></th>
						<!--<th></th>-->
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $fila['id']; ?></td>
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['telefono']; ?></td>
							<td><?php echo $fila['correo']; ?></td>
							<td><?php echo $fila['depto']; ?></td>
							<td><a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-outline-warning" >Edit</a> </td>
							<i class="fa-light fa-trash"></i>
							<!--<td><a href="eliminar.php?id_employee=<?php echo $fila['id']; ?>" class="btn btn-outline-danger">Disable</a> </td>-->
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	
	</body>
</html>	