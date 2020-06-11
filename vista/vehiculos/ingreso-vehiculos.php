<?php  include 'menu.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>vehiculos</title>
</head>
<body>

    <li class="lista salidav"><a class="enlacem" href="index.php">Regresar</a></li>
    
    
    <div class="logo">
        <i  class="logotipo fas fa-parking">Ingreso de vehiculos</i>
    </div>
    <div class="tabla">
        <form class="nuevo-vehiculo" name="nuevo-vehiculo" method="POST" action="index.php?c=vehiculos&a=registro">
            <div class="form-group">
                <label for="exampleFormControlInput1">PLACA:</label>
                <input type="text" class="form-control" id="placa" name="placa" placeholder="475SDE">
            </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">TIPO DE VEHICULO:</label>
            <select class="form-control" id="tipo_vehiculo" name="tipo_vehiculo">
                <option>Moto</option>
                <option>Carro</option>
            </select>
        </div>
        <button id="guardar" name="guardar" type="submit">Ingresar</button>
    </form>
    </div>
</body>
</html>