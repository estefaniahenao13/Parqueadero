<?php

class Modelo_vehiculos{

    private $db;
    private $vehiculos;

    public function __construct(){
        $this->db = Conectar::conexion();
        $this->vehiculos = array();
    }

    public function get_vehiculos(){

        $sql = "SELECT * FROM ingresov";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()){

            $this->vehiculos[] = $row;
        }
        return $this->vehiculos;
    }

    public function insertarvehiculo($placa,$fecha_ingreso, $tipo_vehiculo){
        $filas= 0;
        $sql = "SELECT * FROM ingresov";
        $result = $this->db->query($sql);

        while ($row = $result->fetch_assoc()){

            $this->vehiculos[] = $row;
            $filas += 1;
        }

        if($filas < 10){
            $resultado = $this->db->query("INSERT INTO ingresov (placa, fecha_ingreso, tipo_vehiculo) VALUES('$placa', '$fecha_ingreso', '$tipo_vehiculo')");

        }else{
            echo("Cupo lleno!");
        }
    }

    public function modificar($placa,$fecha_ingreso,$fecha_retiro, $tipo_vehiculo){
      
        $resultado = $this->db->query("UPDATE ingresov SET fecha_ingreso = '$fecha_ingreso', fecha_retiro = '$fecha_retiro', tipo_vehiculo = '$tipo_vehiculo'
        WHERE placa = '$placa' ");        
    }

    public function get_vehiculo($placa){

        $sql = "SELECT * FROM ingresov WHERE placa = '$placa'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;

    }

    public function generaExcel($fecha_incial,$fecha_final){

    

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="Reporte.xls"');

      

        

        $sql = "SELECT placa,fecha_ingreso,tipo_vehiculo FROM  ingresov WHERE fecha_ingreso BETWEEN '$fecha_incial'AND '$fecha_final'";
        $resultado = $this->db->query($sql);
     
      

        ?>

        <table border="1" > 
    <tr>
        <td >Placa</td>
        <td>Fecha</td>
        <td>Tipo</td>
        </tr>
        
        <?php
while($fila = $resultado->fetch_assoc())
	{
        ?>
        
        <tr>
        <td><?php echo $fila['placa'];?></td>
        <td><?php echo $fila['fecha_ingreso'];?></td>
        <td><?php echo $fila['tipo_vehiculo'];?></td>
       </tr>
   
        <?php
	}
    ?>
    </table> 

    <?php                 

      
    }
}


?>