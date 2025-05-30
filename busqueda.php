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
				<h1 style=color:#3282b8>Maintenance complete</h1>
			</div>

			<form method="GET" action="busqueda.php">
				<input type="text" name="query" placeholder="Ingrese el numero de serie">
				<input type="submit" value="Buscar">
			</form>

<style>
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

<?php
require 'connection.php';
require 'conexion.php';

if (isset($_GET['query'])) {
    $consulta = $_GET['query'];

    // Escapar caracteres especiales en la consulta
    $consulta = $conex->real_escape_string($consulta);

    // Construir la consulta SQL
    $sql = "SELECT 
                serie,
                Date,
                usuario,
                Id,
                Aspirado,
                Archivos,
                Actualizaciones
            FROM
                WhoopIT.SAVE_MAINTENANCE AS SM
                LEFT JOIN
                WhoopIT.usuarios AS U ON SM.Id_usuario = U.id_users
                RIGHT JOIN
                WhoopIT.material AS M ON SM.Id_material = M.Id_material
            WHERE
                equipo IN ('Printer', 'PC', 'Laptop', 'Device')
                AND serie = '$consulta'";

    // Ejecutar la consulta
    $resultado = $conex->query($sql);

    // Procesar los resultados
    if ($resultado->num_rows > 0) {
        echo '<table class="table">';
        echo '<thead>
                <tr>
                    <th>Serie</th>
                    <th>Fecha de Mantenimiento</th>
                    <th>Técnico</th>
                    <th>Folio</th>
                    <th>Aspirado</th>
                    <th>Archivos</th>
                    <th>Actualizaciones</th>
                </tr>
            </thead>';
        echo '<tbody>';

        while ($fila = $resultado->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $fila['serie'] . '</td>';
            echo '<td>' . $fila['Date'] . '</td>';
            echo '<td>' . $fila['usuario'] . '</td>';
            echo '<td>' . 'MIT' . $fila['Id'] . '</td>';
            echo '<td>' . ($fila['Aspirado'] == 1 ? 'Realizado' : 'No realizado') . '</td>';
            echo '<td>' . ($fila['Archivos'] == 1 ? 'Realizada' : 'No realizada') . '</td>';
            echo '<td>' . ($fila['Actualizaciones'] == 1 ? 'Aplicadas' : 'No aplicadas') . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';

        echo '<div style="text-align: center;" class="boton">
                <a href="main_complete.php" class="boton">Regresar</a>
            </div>';
    } else {
        echo '<p style="color: red; text-align: center; font-size: 40px;">No se encontraron resultados.</p>';
        echo '<div style="text-align: center;" class="boton">
                <a href="main_complete.php" class="boton">Regresar</a>
            </div>';
    }

    // Cerrar la conexión a la base de datos
    $conex->close();
}
?>

</body>
</html>
