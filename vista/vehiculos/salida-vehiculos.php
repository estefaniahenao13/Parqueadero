<?php include 'menu.php'; ?>

<body>
<div class="logo">
  <i  class="logotipo fas fa-parking">Salida de vehiculos</i>
</div>

<div class="tabla">
<form class="nuevo-vehiculo" name="nuevo-vehiculo" method="POST" action="index.php?c=vehiculos&a=actualizar">

    <input type="hidden" name="placa" id="placa" value="<?php echo $data['placa'];?>">


  <div class="form-group">
    <label for="exampleFormControlInput1">PLACA:</label>
    <input type="text" readonly=»readonly» class="form-control" id="placa" name="placa" value="<?php echo $data['vehiculos']['placa'];?>">
  </div>

  <div class="form-group">
        <label for="exampleFormControlInput1">FECHA INGRESO</label>
        <input type="text" readonly=»readonly» class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $data['vehiculos']['fecha_ingreso'];?>">
  </div>

  <div class="form-group">
        <label for="exampleFormControlInput1">FECHA RETIRO</label>
        <input type="datetime-local"  class="form-control" id="fecha_retiro" name="fecha_retiro" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">TIPO DE VEHICULO:</label>
    <input type="text" readonly=»readonly» class="form-control" id="tipo_vehiculo" name="tipo_vehiculo" value="<?php echo $data['vehiculos']['tipo_vehiculo'];?>">
  </div>

  <button id="modificar" name="modificar" type="submit">Registrar</button>

  </form>
  </div>
    
</body>
</html>