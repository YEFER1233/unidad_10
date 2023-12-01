<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Calculadora</title>
</head>
<body>
    <a href="index.html#section-respuestas">   
        <img class="home" src="img/hogar.jpg" alt="hogar">
    </a>

<!--Se ingresan las variables y se coloca obligatoriedad en los campos-->

    <div class="main-frame-cal">
    <form action="calculadora.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Número 1:</label>
            <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Por favor ingrese el primer número" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Número 2:</label>
            <input type="number" name="n2" class="form-control" id="exampleFormControlInput2" placeholder="Por favor ingrese el segundo número" required>
        </div>

<!--Se ingresan las operaciones matematicas disponibles-->

        <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione la operación:</label>
            <select class="form-control" name="tipo" id="exampleFormControlSelect1">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicacion</option>
            <option value="4">Division</option>
           
            </select>
        </div>
        <button type="submit" name="operar" class="btn btn-outline-info">Operar</button>
    </form>

    <?php

// variables

    $n1 = 0;
    $n2 = 0;
    $tipo = 0;
    $result = 0;
    
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $tipo = $_POST['tipo'];

        switch ($tipo) {
            case '1':
                $result = $n1 + $n2;
                break;
            case '2':
                $result = $n1 - $n2;
                break;
            case '3':
                $result = $n1 * $n2;
                break;
            case '4':
                $result = $n1 / $n2;
                break;

            default :
            echo "<h1>No valido</h1>";    
        }

        echo "<h1>El resultado es: ".$result."</h1>";
        #echo "<script>alert(".$result.");</script>";
    }

    ?>
    </div>
</body>
</html>