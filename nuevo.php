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
        <!-- navbar -->
        <?php include 'navbar.php'; ?>
        <script type="text/javascript">
            window.onload=function(){
                document.getElementById("op3").style.background='white';

            }
        </script>
        
		<div class="container">
            <div class="row">
            <div class="col-md-8">
            <h3 style=color:#3282b8>Add employee</h3>
            <form id="registro" name="registro" method="POST" action="guarda.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Name</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre" required>
                </div>

                    </br>

                <div class="form-group">
                    <label for="telefono">Phone</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce el telefono" required>
                </div>
                
                    </br>

                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Introduce el correo" required>
                </div>

                    </br> 

                <div class="form-group">
                    <label for="depto">Department</label>
                    <select id="depto" class="form-control" name="depto">
                        <option value = "ATE">ATE</option>
                        <option value = "Engineering">Engineering</option>
                        <option value = "Import/Export">Import/Export</option>
                        <option value = "IT">IT</option>
                        <option value = "Mantence">Mantence</option>
                        <option value = "Operation">Operation</option>
                        <option value = "Quality">Quality</option>
                        <option value = "Werehouse">Werehouse</option>
                        <option value = "RH">RH</option>
                        <option value = "RMA">RMA</option>
                        <option value = "Supply">Supply Chain</option>
                        <option value = "Development">Development</option>
                        <option value = "Production">Production</option>
                        <option value = "Planning">Planning</option>
                        <option value = "Automation">Automation</option>
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