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
				<div class="con">
					<?
					echo "<a href='reports/iqc.php' class='boton'>CSV REPORT (IQC)</a>";
					?>
				</div>

			<div>
				<a><button title="Export excel" class="btn btn-outline-success" type="button" onclick="tableToExcel2('tablematerial', 'tablematerial')" value="Export to Excel"><i class="fa fa-file"></i> Download
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
				<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
				<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
				</svg>
				</button></a>
			</div>
			<br>

			<script type="text/javascript">
				var tableToExcel2 = (function() {
				var uri = 'data:application/vnd.ms-excel;base64,'
				, template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
				, base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
				, format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
				return function(table, name) {
				if (!table.nodeType) table = document.getElementById(table)
					var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
				window.location.href = uri + base64(format(template, ctx))
				}
				})()
			</script>
		</div>

	<div class="container">
        <div class="row">
			<?php

				$query = "SELECT * FROM WhoopIT.material where substr(area, 1, 3)='IQC'
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
		</div>


    </div>

</body>
</html>