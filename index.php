<?php
date_default_timezone_set("America/Mexico_City");

?>
<html lang="es">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="css/estilos.css">
  <title>CONTROL VEHICULAR</title>
</head>
<body>


  <nav>
  <div class="ivan_image">
    <img src="images/car_logo2.png" alt="">

  </div>
  <div class="nav_options">
    <ul>
    <li><a href="mostrar.php">VER REGISTROS</a></li>
    <li><a href="pdf/index.php">GENERAR REPORTE</a></li>
    </ul>
  </div>
  </nav>
  <h1> <p align = "left" >  <?php
  date_default_timezone_set("America/Mexico_City");
  $fecha_actual = date("Y-m-d H:i:s");

   ?>


      <div class="row">
        <div class="col l12">

          <div class="col l14 offset-14">

            <form class="" action="control.php" method="post" >
              <h5>SISTEMA PARA CONTROLAR ESTACIONAMIENTO</h5>
              <div class="input-field">
                <select name="tipocoche">
                  <option>OFICIAL</option>
                  <option>RESIDENTE</option>
                  <option>NO RESIDENTE</option>
                </select>

              </div>

              <div class="input-field">
                <input type="text" name="placa" value="">

              </div>

              <div class="input-field">
                <input type="text" name="fecha1" value="<?php echo $fecha_actual?>">

              </div>

              <div class="input-field">
                <input type="text" name="fecha2" value="<?php echo $fecha_actual?>">

              </div>

              <div class="input-field">
                <button type="submit" name="btn-Restar">Agregar</button>

              </div>

            </form>

          </div>


        </div>

      </div>

  </p> </h1>
  <h3>TARIFA: RESIDENTES $1 POR MINUTO
<br> NO RESIDENTES $3 POR MINUTO </br>
<br> AUTOS OFICIALES NO APLICA TARIFA </br >
</h3>



</body>
</html>
