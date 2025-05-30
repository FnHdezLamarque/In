<?php
    include_once ('connection.php');
    include_once ('conexion.php');
$data = array();
$data2 = array();
$data3 = array();
$data4 = array();

//Querys
//sentencia para graficas 
$sql = "SELECT  COUNT(area), equipo, area FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 6) = 'Laptop' group by equipo, area;";
$sqlpc = "SELECT  COUNT(area), equipo, area FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 2) = 'PC' group by equipo, area;";
$sqlpr = "SELECT  COUNT(area), equipo, area FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 5) = 'Print' group by equipo, area;";
$sqlsc = "SELECT  COUNT(area), equipo, area FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 7) = 'Scanner' group by equipo, area;";

//conteo de laptops en stock
$count = "SELECT  COUNT(*) FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 6) = 'Laptop' and area = 'Stock'";
//conteo de PC en stock
$countpc = "SELECT COUNT(*) FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 2) = 'PC' and area = 'Stock'";
//conteo de Print en stock
$countpr = "SELECT COUNT(*) FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 5) = 'Print' and area = 'Stock'";
//conteo de scanners en stock
$countsc = "SELECT COUNT(*) FROM WhoopIT.material WHERE SUBSTR(equipo, 1, 7) = 'Scanner' and area = 'Stock'";


//ejecucion de la consulta (grafica)
$Result = mysqli_query(Connection(),$sql);
$Result2 = mysqli_query(Connection(),$sqlpc);
$Result7 = mysqli_query(Connection(),$sqlpr);
$Result8 = mysqli_query(Connection(),$sqlsc);

//conteo de laptops en stock
$Result3 = mysqli_query(Connection(),$count);
//conteo de pc en stock
$Result4 = mysqli_query(Connection(),$countpc);
//conteo de impresoras en stock
$Result5 = mysqli_query(Connection(),$countpr);
//conteo de escaner en stock
$Result6 = mysqli_query(Connection(),$countsc);




//ciclo para recorrer todos los espacios de la tabla
while($Row = $Result -> fetch_assoc()){

    array_push($data, array("y"=> $Row["COUNT(area)"], "indexLabel"=> $Row["area"]));
}
mysqli_close(Connection());

//ciclo para recorrer todos los espacios de la tabla pc
while($Row = $Result2 -> fetch_assoc()){

    array_push($data2, array("y"=> $Row["COUNT(area)"], "indexLabel"=> $Row["area"]));
}
mysqli_close(Connection());

while($Row = $Result7 -> fetch_assoc()){

    array_push($data3, array("y"=> $Row["COUNT(area)"], "indexLabel"=> $Row["area"]));
}
mysqli_close(Connection());

while($Row = $Result8 -> fetch_assoc()){

    array_push($data4, array("y"=> $Row["COUNT(area)"], "indexLabel"=> $Row["area"]));
}
mysqli_close(Connection());
?>

<style>.body {
    display: flex;
    justify-content: center;
    height: 80vh;
    align-items: center;
    background-color: aqua;
    }
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
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
    <style>
		body {
		background: white;
		}
	</style> 
</head>
<body>
<!--navbar-->
    <?php include 'navbar.php'; ?>
		<script 
			type="text/javascript">
				window.onload=function(){
					document.getElementById("op1").style.background='white';
				}
        </script>

    <div class="container">
        <div class="row">
                <div class="text-center">
                    <H1 style="font-weight: bold;">Stock</H1>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary text-center mb-1" style="max-width: 18rem;">
                        <div class="card-header"><h4>Available Laptops</h4></div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    if ($Result3->num_rows > 0) {
                                    // Obtener el dato y mostrarlo
                                    $row = $Result3->fetch_assoc();
                                    $dato = $row["COUNT(*)"];
                                    echo "In stock: " . $dato;
                                } else {
                                    echo "No se encontraron resultados.";
                                }
                                    ?>
                                </h5>
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary text-center mb-1" style="max-width: 18rem;">
                        <div class="card-header"><h4>Available PC's</h4></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php
                                    if ($Result4->num_rows > 0) {
                                    // Obtener el dato y mostrarlo
                                    $row = $Result4->fetch_assoc();
                                    $dato = $row["COUNT(*)"];
                                    echo "In stock: " . $dato;
                                } else {
                                    echo "No se encontraron resultados.";
                                }
                                    ?>
                                </h5>
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary text-center mb-1" style="max-width: 18rem;">
                        <div class="card-header"><h4>Available Printers</h4></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php
                                    if ($Result5->num_rows > 0) {
                                    // Obtener el dato y mostrarlo
                                    $row = $Result5->fetch_assoc();
                                    $dato = $row["COUNT(*)"];
                                    echo "In stock: " . $dato;
                                } else {
                                    echo "No se encontraron resultados.";
                                }
                                    ?>
                                </h5>
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-primary text-center mb-1" style="max-width: 18rem;">
                        <div class="card-header"><h4>Available Scanners</h4></div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    if ($Result6->num_rows > 0) {
                                    // Obtener el dato y mostrarlo
                                    $row = $Result6->fetch_assoc();
                                    $dato = $row["COUNT(*)"];
                                    echo "In stock: " . $dato;
                                } else {
                                    echo "No se encontraron resultados.";
                                }
                                    ?>
                                </h5>
                            </div>
                    </div>
                </div>
        </div>
    </div>

    <div>
        <style>
            .grafica-container {
            width: 1100px;
            margin-left: 900px;
            /* Otros estilos personalizados para cada contenedor de gráfica */
            }

            .grafica-containerpc {
            width: 1100px;
            margin-left: 200px;
            }

            .grafica-containerpr {
            width: 1100px;
            margin-top: 500px;
            margin-left: 200px;
            }

            .grafica-containersc {
            width: 1100px;
            margin-left: 900px;
            height: 100px;
            margin-bottom: 100px;
            }

            /*.containe{
                width: 100%;
                margin: auto;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10px;
                align-items: center;
            }*/
        </style>
    </div>

    <div class="row">
    <div class="container">
        <div>
        <div class="grafica-container">
            <div class="col-md-6">
                <div id="chartContainer1"></div>
            </div>
        </div>
        </div>
    
        <div>
        <div class="grafica-containerpc">
            <div class="col-md-6">
                <div id="chartContainer2"></div>
            </div>
        </div>
        </div>

        <div class="grafica-containerpr">
            <div class="col-md-6">
                <div id="chartContainer3"></div>
            </div>
        </div>

        <div class="grafica-containersc">
            <div class="col-md-6">
                <div id="chartContainer4"></div>
            </div>
        </div>
    </div>
    </div>


<!--graficas-->
<script>
    window.onload = function () {
        CanvasJS.addColorSet("",
                    [//colorSet Array
                    "#4B77E5",
                    ]);
        var chart1 = new CanvasJS.Chart("chartContainer1",{
            colorSet: "greenShades",
            //theme: "light4",    // "light1", "dark1", "dark2"
            title:{
                text: "Laptops"
            },
            legend: {
                maxWidth: 150,
                itemWidth: 90
            },
            data: [
            {
                type: "pie",
                //showInLegend: true,
                legendText: "{y},{indexLabel}",
                indexLabel: " {y},{indexLabel}",
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        var chart2 = new CanvasJS.Chart("chartContainer2",{
            colorSet: "greenShades",
            //theme: "light4",    // "light1", "dark1", "dark2"
            title:{
                text: "PC's"
            },
            legend: {
                maxWidth: 150,
                itemWidth: 90
            },
            data: [
            {
                type: "pie",
                //showInLegend: true,
                legendText: "{y},{indexLabel}",
                indexLabel: " {y},{indexLabel}",
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($data2, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        var chart3 = new CanvasJS.Chart("chartContainer3",{
            colorSet: "greenShades",
            //theme: "light4",    // "light1", "dark1", "dark2"
            title:{
                text: "Printers"
            },
            legend: {
                maxWidth: 150,
                itemWidth: 90
            },
            data: [
            {
                type: "pie",
                //showInLegend: true,
                legendText: "{y},{indexLabel}",
                indexLabel: " {y},{indexLabel}",
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($data3, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        var chart4 = new CanvasJS.Chart("chartContainer4",{
            colorSet: "greenShades",
            //theme: "light4",    // "light1", "dark1", "dark2"
            title:{
                text: "Scanners"
            },
            legend: {
                maxWidth: 150,
                itemWidth: 90
            },
            data: [
            {
                type: "pie",
                //showInLegend: true,
                legendText: "{y},{indexLabel}",
                indexLabel: " {y},{indexLabel}",
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($data4, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        chart1.render();
        chart2.render();
        chart3.render();
        chart4.render();
    }
</script>



    <div id="chartContainer" style="height: 360px; width: 50%; margin: auto;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/index.js"> </script>

</body>
</html>
