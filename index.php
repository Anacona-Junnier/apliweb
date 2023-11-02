<html>

<head>
  <title>Introducción a PHP</title>
</head>

<?php
$textos = array("TTM", "Tecnologia en Telematica", "FIET");
function generarCadena($texto)
{
  global $textos;
  echo "tamaño del arreglo" . count($textos);

  if (strlen($texto) < 5) {
    return "<h2>" . $texto . "</h2>";
  } else {
    return $texto;
  }

}
?>

<body>

  <?php
  foreach ($textos as $texto) {
    echo generarCadena($texto);
    echo "<br>";

  }

  ?>

</body>

</html>