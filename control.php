<?php

if (isset($_REQUEST['btn-Restar'])) {
include "conexion.php";
  $fechauno=$_POST['fecha1'];
  $fechados=$_POST['fecha2'];
  $tipodecoche=$_POST['tipocoche'];
  $placa=$_POST['placa'];


  $date1=strtotime($fechauno);
  $date2=strtotime($fechados);

$resultado=round((($date2-$date1)/60/60),2);
$min= (($resultado)*60);


switch ($tipodecoche) {
    case "OFICIAL":
        $importe= "0";
        break;
    case "RESIDENTE":
        $importe= (1*$min);
        break;
    case "NO RESIDENTE":
        $importe= (3*$min);
        break;
}



$sql="INSERT INTO fechas(fecha_uno, fecha_dos, resultado, placa, tipoCoche, importe) VALUES('$fechauno', '$fechados', '$min','$placa','$tipodecoche','$importe')";

$result=mysqli_query($conexion,$sql);

if ($result) {
  echo '<script type="text/javascript">
alert("REGISTRO EXITOSO")
  </script>';
}else {
  echo '<script type="text/javascript">
alert("FALLO REGISTRO")
  </script>';
}

}
 ?>
<a href="index.php">REGRESAR</a>
