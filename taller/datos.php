<?php

    include 'db/conexion.php';

    $query = mysqli_query($conexion,"SELECT * FROM usuarios");
    $query2 = mysqli_query($conexion,"SELECT cedula FROM usuarios");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_datos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Base_datos</title>
</head>
<body>
    <a href="index.html#section-respuestas">   
        <img class="home" src="img/hogar.jpg" alt="home">
    </a>
        <div class="wrapper">
        <div class="container">
            <div class="filter">
            <div class="row">
                <div class="col-sm-4">
                <div class="show-row">
                    <select class="form-control">
                    <option value="5" selected="selected">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    </select>
                </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                <div class="search-row">
                    <input type="text" name="search" class="form-control" placeholder="Ingrese la palabra clave">
                </div>
                </div>
            </div>
            </div>
        <table id="music" class="table table-responsive table-hover">
            <thead>
            <tr  class="myHead">
                <th>#</th>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>
            </thead>
            <tbody>

            <?php
            
            while ($datos = mysqli_fetch_array($query)) {
                $id = $datos['id'];
                $nombre = $datos['nombre'];
                $apellido = $datos['apellido'];
                $cedula = $datos['cedula'];

                echo'
                <tr data-url="FQS7i2z1CoA">
                    <td></td>
                    <td>'.$id.'</td>
                    <td>'.$nombre.'</td>
                    <td>'.$apellido.'</td>
                    <td>'.$cedula.'</td>
                </tr>
                ';
            }

            ?>

            </tbody>
        </table>
        <div class="text-center controller">
            <ul class="pagination"></ul>
        <ul class="pager">
        <li ><a href="javascript:void(0)" class="prev">Atras</a></li>
        <li><a href="javascript:void(0)" class="next">Siguiente</a></li>
        </ul>
        </div>

        </div>

        </div>

    <!--modulo para ingresar datos nuevos-->

            <h1>FORMULARIO DE INSERT</h1>
        <form action="db/almacenar_datos.php" method="POST">
            <input type="text" name="nombre" placeholder="Por favor digite el nombre" required>
            <input type="text" name="apellido" placeholder="Por favor digite el apellido" required>
            <input type="number" name="cedula" placeholder="Por favor digite el número de cedula" required>
            <input type="submit" name="almacenar" value="Guardar">
        </form>
       
    <!--modulo para consultar los datos-->    

        <h1>FORMULARIO DE UPDATE</h1>

        <form action="" method="POST">
            <select name="id_consulta">
            <?php
            while ($datos2 = mysqli_fetch_array($query2)) {
                $cedula_query = $datos2['cedula'];
                echo'
                <option value="'.$cedula_query.'">'.$cedula_query.'</option>
                ';
            }
            ?>
            </select>
            <input type="submit" name="buscar" value="Buscar">
        </form>

        <?php

        //modulo actualizacion de datos
        
        if (isset($_POST['buscar'])) {
            $id_cc_query = $_POST['id_consulta'];
            echo '
            <h4>Ingrese los nuevos datos para la cedula='.$id_cc_query.'</h4>
            <form action="db/actualizar_datos.php" method="POST">
                <input type="text" name="nombre_act" placeholder="Digite nuevo nombre" required>
                <input type="hidden" value="'.$id_cc_query.'" name="cc">
                <input type="text" name="apellido_act" placeholder="Digite nuevo apellido" required>
                <input type="submit" name="act" value="actualizar">
            </form>
            ';
        }

        ?>
        

        
        <script src="js/script.js"></script>
        <script>
            <script type="text/javascript">
                function upperCase() {
                var x=document.getElementById("fname").value
                document.getElementById("fname").value=x.toUpperCase()
                }
            </script>
        </script>
</body>
</html>