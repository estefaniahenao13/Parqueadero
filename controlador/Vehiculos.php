<?php 

class VehiculosController{

    public function __construct(){
        require_once "modelo/Modelo_vehiculos.php";
    }

    public function index(){

        $vehiculos = new Modelo_vehiculos();
        $data["titulo"] = "Vehiculos";
        $data["vehiculos"] = $vehiculos->get_vehiculos();

        require_once "vista/vehiculos/vehiculos.php";  
    }

    public function Nvehiculo(){
        $data["titulo"] = "Vehiculos";
         require_once "vista/vehiculos/ingreso-vehiculos.php";  


    }

    public function registro(){

        date_default_timezone_set("America/Bogota");
        $placa = $_POST['placa'];
        $fecha_ingreso = date("Y-m-j-H-i-s");
        $tipo_vehiculo = $_POST['tipo_vehiculo'];

        $vehiculos = new Modelo_vehiculos();
        $vehiculos->insertarvehiculo($placa,$fecha_ingreso, $tipo_vehiculo);
        $data["titulo"] = "Vehiculos";
       $this->index();
    }

    public function modificar($placa){
         $vehiculos = new Modelo_vehiculos();
         


         $data["placa"] = $placa;
         $data["vehiculos"] = $vehiculos->get_vehiculo($placa);
         $data["titulo"] = "Vehiculos";
         require_once "vista/vehiculos/salida-vehiculos.php"; 
    }

    public function actualizar(){

        
        $placa = $_POST['placa'];
        $fecha_ingreso = $_POST['fecha_ingreso'];
        $fecha_retiro = $_POST['fecha_retiro'];
        $tipo_vehiculo = $_POST['tipo_vehiculo'];

        $vehiculos = new Modelo_vehiculos();
        $vehiculos->modificar($placa,$fecha_ingreso,$fecha_retiro,$tipo_vehiculo);
        $data["titulo"] = "Vehiculos";
        $this->index();
    }

    public function reporte(){
         require_once "vista/vehiculos/reporte.php";  


    }

    public function generar(){

     $fecha_incial = $_POST['fecha_inicial'];
     $fecha_final = $_POST['fecha_final'];

     $vehiculos = new Modelo_vehiculos();
     $vehiculos->generaExcel($fecha_incial,$fecha_final);

    }

}



?>