<?php  include 'menu.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>vehiculos</title>
</head>
<body>

<li class="lista ingresov"><a class="enlacem" href="index.php?c=vehiculos&a=Nvehiculo">Ingreso</a></li>
<li class="lista salidav"><a class="enlacem" href="index.php?c=vehiculos&a=Reporte">Reporte</a></li>

    


<div class="logo">
<i  class="logotipo fas fa-parking">Control de parqueadero</i>
</div>

<div class="tabla">
<table class="table table-bordered">
    <tr>
      <th>Placa</th>
      <th>Fecha de ingreso</th>
      <th>Fecha de retiro</th>
      <th>Tipo de vehiculo</th>
      <th>Accion</th>
    </tr>
    <?php  
    foreach($data["vehiculos"] as $dato){
    ?>
    <tr>
     <td><?php echo $dato['placa']; ?></td>
     <td><?php echo $dato['fecha_ingreso']; ?></td>
     <td><?php echo $dato['fecha_retiro']; ?></td>
     <td><?php echo $dato['tipo_vehiculo']; ?></td>
        <td><a href="index.php?c=vehiculos&a=modificar&id=<?php echo $dato['placa']; ?>"><i class="fas fa-car"></i></a>Salida</td>
    </tr>
   <?php
   }
   ?>
   </table>
   </div>
    
</body>
</html>