<?php
include "conexion.php";
?>


<html lang="es">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="css/estilos.css">

 <title>REGISTRO</title>
</head>
<body>
  <nav>
  <div class="ivan_image">
    <img src="images/car_logo2.png" alt="">

  </div>
  <div class="nav_options">
    <ul>
    <li><a href="index.php">REGRESAR AL INICIO</a></li>
    <li><a href="pdf/index.php">GENERAR REPORTE</a></li>
    </ul>
  </div>
  </nav>

<br>

 <table border="1" >
   <tr>
     <td>PLACA</td>
     <td>FECHA DE INGRESO</td>
     <td>FECHA DE SALIDA</td>
     <td>TIPO DE VEHICULO</td>
     <td>MINUTOS</td>
     <td>IMPORTE</td>
   </tr>

   <?php
   $sql="SELECT * from fechas";
   $result=mysqli_query($conexion,$sql);

   while($mostrar=mysqli_fetch_array($result)){
    ?>

   <tr>
     <td><?php echo $mostrar['placa'] ?></td>
     <td><?php echo $mostrar['fecha_uno'] ?></td>
     <td><?php echo $mostrar['fecha_dos'] ?></td>
     <td><?php echo $mostrar['tipoCoche'] ?></td>
     <td><?php echo $mostrar['resultado'] ?></td>
     <td><?php echo $mostrar['importe'] ?></td>
   </tr>
 <?php
 }
  ?>
 </table>

</body>
</html>
