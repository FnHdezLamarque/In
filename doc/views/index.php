<?
require '../../conexion.php';
$query = "SELECT  id_employee, nombre FROM WhoopIT.employee order by nombre asc;";
$resul = $mysqli->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letters</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


</head>

<body>
    <br>
    <div class="container">
    <div class="row">
        <h1 style=color:#3282b8>Response Letter</h1>
    </div>
    </div>
    <div class="container">
        <div class="col-sm-12">
            <br>

        <form action="./pdf.php" id="material" name="material" method="POST">
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" id="id_employee" name="id_employee">
                    <?php while ($row = $resul->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_employee']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <button class="btn btn-outline-primary" id="guarda2" name="guarda2" type="submit">Generate</button>
        </form>
            
            <br>
            
            <div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
                    </svg> 
                </button>
            </div>
            <br>


            <div class="container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Employee Number</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "../includes/db.php";
                        $consulta = mysqli_query(Connection(), "SELECT * FROM WhoopIT.repositorio");
                        while ($fila = mysqli_fetch_assoc($consulta)):
                        ?>
                            <tr>
                            <td><?php echo $fila['nombre'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['archivo'] ;?></td>
                                <td>
                                    <a href="../includes/download.php?id=<?php echo $fila['id']; ?>" class="btn btn-primary">
                                    <i class="fas fa-download"></i>
                                    </a>
                                <?php endwhile ;?>
                            </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <a href="../../dashboard.php">Back</a>
</body>
<style>
    a {
        text-decoration: none;
    }

    .s {
        padding-top: 50px;
        text-align: center;
    }
</style>

<?php include "agregar.php"; ?>


</html>