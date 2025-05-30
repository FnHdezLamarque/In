<!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        <title> Whoop </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        
        <style 
			type="text/css">
        </style>

        <script 
			type="text/javascript">
        </script>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.6.0.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>

		<!-- CSS (Diseño) -->
		<style>

			body {
				font-family: 'Overpass', sans-serif;
				font-weight: normal;
				font-size: 100%;
				color: #1b262c;
				margin: 0;
				background-color: #0f4c75;
			}

			#contenedor {
				display: flex;
				align-items: center;
				justify-content: center;
				
				margin: 0;
				padding: 0;
				min-width: 100vw;
				min-height: 100vh;
				width: 100%;
				height: 100%;
			}

			#central {
				max-width: 320px;
				width: 100%;
			}

			.titulo {
				font-size: 250%;
				color:#bbe1fa;
				text-align: center;
				margin-bottom: 20px;
			}

			#login {
				width: 100%;
				padding: 50px 30px;
				background-color: #3282b8;
				
				-webkit-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
				-moz-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
				box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
				
				border-radius: 3px 3px 3px 3px;
				-moz-border-radius: 3px 3px 3px 3px;
				-webkit-border-radius: 3px 3px 3px 3px;
				
				box-sizing: border-box;
			}

			#login input {
				font-family: 'Overpass', sans-serif;
				font-size: 110%;
				color: #1b262c;
				
				display: block;
				width: 100%;
				height: 40px;
				
				margin-bottom: 10px;
				padding: 5px 5px 5px 10px;
				
				box-sizing: border-box;
				
				border: none;
				border-radius: 3px 3px 3px 3px;
				-moz-border-radius: 3px 3px 3px 3px;
				-webkit-border-radius: 3px 3px 3px 3px;
			}

			#login input::placeholder {
				font-family: 'Overpass', sans-serif;
				color: #E4E4E4;
			}

			#login button {
				font-family: 'Overpass', sans-serif;
				font-size: 110%;
				color:#1b262c;
				width: 100%;
				height: 40px;
				border: none;
				
				border-radius: 3px 3px 3px 3px;
				-moz-border-radius: 3px 3px 3px 3px;
				-webkit-border-radius: 3px 3px 3px 3px;
				
				background-color: #bbe1fa;
				
				margin-top: 10px;
			}

			#login button:hover {
				background-color: #0f4c75;
				color:#bbe1fa;
			}

			.pie-form {
				font-size: 90%;
				text-align: center;    
				margin-top: 15px;
			}

			.pie-form a {
				display: block;
				text-decoration: none;
				color: #bbe1fa;
				margin-bottom: 3px;
			}

			.pie-form a:hover {
				color: #0f4c75;
			}

			.inferior {
				margin-top: 10px;
				font-size: 90%;
				text-align: center;
			}

			.inferior a {
				display: block;
				text-decoration: none;
				color: #bbe1fa;
				margin-bottom: 3px;
			}

			.inferior a:hover {
				color: #3282b8;
			}


		</style>
        
    </head>
    
    <body>
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        In
                    </div>
                        <form id="loginform">
                            <input type="text" name="user" placeholder="User" required>
                            <input type="password" placeholder="Password" name="password" required>

                            <button type="submit" title="Ingresar" name="Ingresar">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
    </body>
</html>