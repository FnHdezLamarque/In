<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <ul class="nav nav-tabs" id="nav" color-font="black">
					<li class="nav-item">
                        <a class="nav-link" class="active" href="dashboard.php" id="op1" style=color:#3282b8>Dashboard</a>
                    </li>
                    <li class="nav-item" class="active">
                        <a class="nav-link" href="empleados.php" id="op2" style=color:#3282b8>Employees</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" class="active" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="op5" href="vistamaterial.php" style=color:#3282b8>Material</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="op5" href="vistamaterial.php">All</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="pc.php">PC</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="lap.php">Laptop</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="display.php">Display</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="mouse.php">Mouse</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="keyboard.php">Keyboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="printer.php">Printer</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="scanner.php">Scanner</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="device.php">Device</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="other.php">Other</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op5" href="disable.php">Disable</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" class="active" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="vistamaterial.php" style=color:#3282b8>Add</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="op3" href="nuevo.php">User</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op4" href="material.php">Material</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op4" href="../WhoopIT/doc/views/index.php">Letter</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" class="active" role="button" data-bs-toggle="dropdown"  href="vistamaterial.php" id="op6" style=color:#3282b8>Areas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="fulf.php" id="op6">      TQI</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="asse.php" id="op6">      Assembly</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="smt.php" id="op6">       SMT</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="where.php" id="op6">     Warehouse</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="mezz.php" id="op6">      Mezzanine</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="admin.php" id="op6">     Administrative</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="iqc.php" id="op6">       IQC</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="pack.php" id="op6">      Packing</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="recharge.php" id="op6">  Recharge</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="aisle.php" id="op6">     Aisle</a></li>
                    </ul>
                    </li>

                    <li class="nav-item" class="active">
                        <a class="nav-link" href="stock.php" id="op7" style=color:#3282b8>Stock</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" class="active" role="button" data-bs-toggle="dropdown"  href="vistamaintenance.php" id="op8" style=color:#3282b8>Maintenance</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="main_complete.php" id="op8">Done</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op8">Expired</a></li>
                            <ul>
                                <li><a class="dropdown-item" id="op8" href="explap.php">Laptops</a></li>
                                <li><a class="dropdown-item" id="op8" href="exppc.php">PC's</a></li>
                                <li><a class="dropdown-item" id="op8" href="exppr.php">Printers</a>
                                <li><a class="dropdown-item" id="op8" href="expdev.php">Devices</a>
                            </ul>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="vistamaintenance.php" id="op8">View Maintenance</a></li>
                            <ul>
                                <li><a class="dropdown-item" id="op8" href="main_lap.php">Laptops</a></li>
                                <li><a class="dropdown-item" id="op8" href="main-pc.php">PC's</a></li>
                                <li><a class="dropdown-item" id="op8" href="main-pr.php">Printers</a>
                                <li><a class="dropdown-item" id="op8" href="main-dev.php">Devices</a>
                            </ul>

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" id="op8" href="xpress.php">Maintenance Xpress</a>
                        
                    </ul>
                    </li>

                    

                    <li class="nav-item">
                        <a class="position-absolute top-0 end-0 nav-link" href="index.php" id="op4" style=color:#3282b8>Log out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>