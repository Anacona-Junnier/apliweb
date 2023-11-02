<!DOCTYPE html>
<html>

<head>
  <title>Arreglos Globales en PHP</title>
  <?php
  $x = 10;
  $nombre = "Cristhian";
  $isEstudiante = false;
  $temperatura = 18.5;

  ?>
</head>

<body>
  <?php
    echo"<h1>".$x."</h1>";
    echo $GLOBALS["x"]."<br>";
    echo $GLOBALS["nombre"]."<br>";
    echo $GLOBALS["temperatura"]."<br>";

  ?>

</body>

</html>