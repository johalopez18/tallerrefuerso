<?php
include("Basedatos.php");

if(isset($_POST["botonenviada"])){



 $nombre=$_POST["nombre"];
 /*$cedula=$_POST["cedula"];     
 $apellidos=$_POST["apellidos"];
 $telefono=$_POST["telefono"];
 $edad=$_POST["edad"];
 $direccion=$_POST["direccion"];
 */
 $operacion= new basedatos();


 $consulta="INSERT INTO usuarios(nombre) VALUES ( '$nombre' )";
    $operacion->alterarBaseDatos($consulta);

}
?>  
