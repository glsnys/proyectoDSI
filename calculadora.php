<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container-md bg-light">
    
    <div class="row">
        <header class="bg-info">
            Cabecera
            
        </header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Productos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Laptops</a></li>
                                <li><a class="dropdown-item active" href="#">Computadoras</a></li>
                                <li><a class="dropdown-item" href="#">Suministros</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Descuentos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="contenedor" class="col-md-9 bg-success">
            <?php
                $primero=$_GET['num1'];
                $segundo=$_GET['num2'];

                $respuesta = $primero+$segundo;

                echo '<h1>'.$respuesta.'</h1>';
            ?>
        </div>
        <aside class="col-md-3 bg-primary">
            
            <form action="calculadora.php" method="get">
                <div class="mb-3">
                    <input class="form-control" type="number" placeholder="Número 1">
                </div>
                <div class="mb-3">
                    <input class="form-control"  type="number" placeholder="Número 2">
                </div>
                <div class="mb-3">
                    <input class="btn btn-warning" type="submit" value="Sumar">
                </div>
            </form>

        </aside>
        <footer class="bg-danger">
            Sitio web desarrollado por los alumnos de DSI 4
        </footer>
    </div>
    
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>